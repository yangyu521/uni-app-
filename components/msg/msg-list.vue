<template>
	<view>
	<view class="flex align-center p-2 border-bottom border-light-secondary animated fast fadeIn" hover-class="bg-light" @click="open">
		<image :src="item.avatar" mode="aspectFill" style="width: 80rpx;height: 80rpx;" class="rounded-circle px-2"></image>
		
		<view class="flex flex-column flex-1 ">
			<view class="flex align-center justify-between">
				<text class="font-md">{{item.username}}</text>
				<text class="font-sm text-secondary">{{item.update_time | formatTime}}</text>
			</view>
				
			<view class="flex align-center justify-between">
				<text class="text-secondary text-ellipsis" style="max-width: 500rpx;">{{item.data}}</text>
				<uni-badge :text="item.noread" type="error"></uni-badge>
			</view>	
			</view>
		</view>
		</view>
</template>

<script>
	import uniBadge from "@/components/uni-ui/uni-badge/uni-badge.vue"
	//引入时间库
	import $T from "@/components/common/time.js"
	
	export default {
		components:{
			uniBadge
		},
		props:{
			item:Object,
			index:Number
		},
		filters:{
			formatTime(value){
				return $T.gettime(value)
			}
		},
		methods:{
			open(){
				uni.navigateTo({
					url:"/pages/user-chat/user-chat"
				})
			}
		}
	}
</script>

<style>
</style>
