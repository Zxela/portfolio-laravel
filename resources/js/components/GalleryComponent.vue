<template>
	<div class="flex-center position-ref full-height walking-background">
		<div class="content">
			<div class="title m-b-md">Walking in my shoes</div>
			<div class="navigation"></div>
		</div>
	</div>
</template>
<script>
	export default {
		mounted() {
			console.log("Component mounted.");
		}
	};
</script>
<style scoped>
html,
body {
	color: black;
	font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande",
		"Lucida Sans", Arial, sans-serif;
	font-weight: 100;
	height: 100vh;
	margin: 0;
}

.full-height {
	height: 100vh;
}

.flex-center {
	align-items: center;
	display: flex;
	justify-content: center;
}

.position-ref {
	position: relative;
}

.top-right {
	position: absolute;
	right: 10px;
	top: 18px;
}

.content {
	text-align: center;
}

.title {
	font-size: 84px;
}

.links > a {
	color: #636b6f;
	padding: 0 25px;
	font-size: 12px;
	font-weight: 600;
	letter-spacing: 0.1rem;
	text-decoration: none;
	text-transform: uppercase;
}

.m-b-md {
	margin-bottom: 30px;
}
.walking-background {
	background-image: url(https://res.cloudinary.com/dgppfa9sm/image/upload/v1544921819/Jizelle/IMG_5314.jpg);
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
}
</style>