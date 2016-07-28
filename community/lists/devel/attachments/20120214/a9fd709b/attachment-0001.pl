diff -ur openmpi-1.7a1r25913/opal/asm/base/MIPS.asm openmpi-1.7a1r25913m/opal/asm/base/MIPS.asm
--- openmpi-1.7a1r25913/opal/asm/base/MIPS.asm	2012-02-13 20:00:05.000000000 -0600
+++ openmpi-1.7a1r25913m/opal/asm/base/MIPS.asm	2012-02-14 17:10:33.064085750 -0600
@@ -68,11 +68,10 @@
 #endif
 	beqz   $2, retry1
 done1:                 
-	.set reorder          
-
 	xor	$3,$3,$5
 	j	ra
 	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_32)
 
 
@@ -104,11 +103,10 @@
 #ifdef __linux__
 	.set mips0
 #endif
-	.set reorder          
-
 	xor	$3,$3,$5
 	j	ra
 	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_acq_32)
 
 	
@@ -140,16 +138,15 @@
 #endif
 	beqz   $2, retry3   
 done3:                 
-	.set reorder          
-
 	xor	$3,$3,$5
 	j	ra
 	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_rel_32)
 	
 #ifdef __mips64	
 LEAF(opal_atomic_cmpset_64)
-		.set noreorder        
+	.set noreorder        
 retry4:                
 	lld    $3, 0($4)         
 	bne    $3, $5, done4   
@@ -157,11 +154,10 @@
 	scd    $2, 0($4)         
 	beqz   $2, retry4   
 done4:                 
-	.set reorder          
-
-	xor	$4,$3,$5
+	xor	$3,$3,$5
 	j	ra
-	sltu	$3,$4,1
+	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_64)
 
 
@@ -174,11 +170,11 @@
 	scd    $2, 0($4)         
 	beqz   $2, retry5   
 done5:                 
-	.set reorder          
 	sync
-	xor	$4,$3,$5
+	xor	$3,$3,$5
 	j	ra
-	sltu	$3,$4,1
+	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_acq_64)
 
 
@@ -192,10 +188,9 @@
 	scd    $2, 0($4)         
 	beqz   $2, retry6   
 done6:                 
-	.set reorder          
-
-	xor	$4,$3,$5
+	xor	$3,$3,$5
 	j	ra
-	sltu	$3,$4,1
+	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_rel_64)
 #endif /* __mips64 */
diff -ur openmpi-1.7a1r25913/opal/asm/generated/atomic-mips-irix.s openmpi-1.7a1r25913m/opal/asm/generated/atomic-mips-irix.s
--- openmpi-1.7a1r25913/opal/asm/generated/atomic-mips-irix.s	2012-02-13 20:12:51.000000000 -0600
+++ openmpi-1.7a1r25913m/opal/asm/generated/atomic-mips-irix.s	2012-02-14 17:15:15.040085602 -0600
@@ -67,11 +67,10 @@
 #endif
 	beqz   $2, retry1
 done1:                 
-	.set reorder          
-
 	xor	$3,$3,$5
 	j	ra
 	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_32)
 
 
@@ -103,11 +102,10 @@
 #ifdef __linux__
 	.set mips0
 #endif
-	.set reorder          
-
 	xor	$3,$3,$5
 	j	ra
 	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_acq_32)
 
 	
@@ -139,16 +137,15 @@
 #endif
 	beqz   $2, retry3   
 done3:                 
-	.set reorder          
-
 	xor	$3,$3,$5
 	j	ra
 	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_rel_32)
 	
 #ifdef __mips64	
 LEAF(opal_atomic_cmpset_64)
-		.set noreorder        
+	.set noreorder        
 retry4:                
 	lld    $3, 0($4)         
 	bne    $3, $5, done4   
@@ -156,11 +153,10 @@
 	scd    $2, 0($4)         
 	beqz   $2, retry4   
 done4:                 
-	.set reorder          
-
-	xor	$4,$3,$5
+	xor	$3,$3,$5
 	j	ra
-	sltu	$3,$4,1
+	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_64)
 
 
@@ -173,11 +169,11 @@
 	scd    $2, 0($4)         
 	beqz   $2, retry5   
 done5:                 
-	.set reorder          
 	sync
-	xor	$4,$3,$5
+	xor	$3,$3,$5
 	j	ra
-	sltu	$3,$4,1
+	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_acq_64)
 
 
@@ -191,10 +187,9 @@
 	scd    $2, 0($4)         
 	beqz   $2, retry6   
 done6:                 
-	.set reorder          
-
-	xor	$4,$3,$5
+	xor	$3,$3,$5
 	j	ra
-	sltu	$3,$4,1
+	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_rel_64)
 #endif /* __mips64 */
diff -ur openmpi-1.7a1r25913/opal/asm/generated/atomic-mips-linux.s openmpi-1.7a1r25913m/opal/asm/generated/atomic-mips-linux.s
--- openmpi-1.7a1r25913/opal/asm/generated/atomic-mips-linux.s	2012-02-13 20:12:51.000000000 -0600
+++ openmpi-1.7a1r25913m/opal/asm/generated/atomic-mips-linux.s	2012-02-14 17:16:38.156085629 -0600
@@ -67,11 +67,10 @@
 #endif
 	beqz   $2, retry1
 done1:                 
-	.set reorder          
-
 	xor	$3,$3,$5
 	j	ra
 	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_32)
 
 
@@ -103,11 +102,10 @@
 #ifdef __linux__
 	.set mips0
 #endif
-	.set reorder          
-
 	xor	$3,$3,$5
 	j	ra
 	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_acq_32)
 
 	
@@ -139,16 +137,15 @@
 #endif
 	beqz   $2, retry3   
 done3:                 
-	.set reorder          
-
 	xor	$3,$3,$5
 	j	ra
 	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_rel_32)
 	
 #ifdef __mips64	
 LEAF(opal_atomic_cmpset_64)
-		.set noreorder        
+	.set noreorder        
 retry4:                
 	lld    $3, 0($4)         
 	bne    $3, $5, done4   
@@ -156,11 +153,10 @@
 	scd    $2, 0($4)         
 	beqz   $2, retry4   
 done4:                 
-	.set reorder          
-
-	xor	$4,$3,$5
+	xor	$3,$3,$5
 	j	ra
-	sltu	$3,$4,1
+	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_64)
 
 
@@ -173,11 +169,11 @@
 	scd    $2, 0($4)         
 	beqz   $2, retry5   
 done5:                 
-	.set reorder          
 	sync
-	xor	$4,$3,$5
+	xor	$3,$3,$5
 	j	ra
-	sltu	$3,$4,1
+	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_acq_64)
 
 
@@ -191,11 +187,10 @@
 	scd    $2, 0($4)         
 	beqz   $2, retry6   
 done6:                 
-	.set reorder          
-
-	xor	$4,$3,$5
+	xor	$3,$3,$5
 	j	ra
-	sltu	$3,$4,1
+	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_rel_64)
 #endif /* __mips64 */
 
diff -ur openmpi-1.7a1r25913/opal/asm/generated/atomic-mips64-linux.s openmpi-1.7a1r25913m/opal/asm/generated/atomic-mips64-linux.s
--- openmpi-1.7a1r25913/opal/asm/generated/atomic-mips64-linux.s	2012-02-13 20:12:51.000000000 -0600
+++ openmpi-1.7a1r25913m/opal/asm/generated/atomic-mips64-linux.s	2012-02-14 17:16:43.192085828 -0600
@@ -67,11 +67,10 @@
 #endif
 	beqz   $2, retry1
 done1:                 
-	.set reorder          
-
 	xor	$3,$3,$5
 	j	ra
 	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_32)
 
 
@@ -103,11 +102,10 @@
 #ifdef __linux__
 	.set mips0
 #endif
-	.set reorder          
-
 	xor	$3,$3,$5
 	j	ra
 	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_acq_32)
 
 	
@@ -139,16 +137,15 @@
 #endif
 	beqz   $2, retry3   
 done3:                 
-	.set reorder          
-
 	xor	$3,$3,$5
 	j	ra
 	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_rel_32)
 	
 #ifdef __mips64	
 LEAF(opal_atomic_cmpset_64)
-		.set noreorder        
+	.set noreorder        
 retry4:                
 	lld    $3, 0($4)         
 	bne    $3, $5, done4   
@@ -156,11 +153,10 @@
 	scd    $2, 0($4)         
 	beqz   $2, retry4   
 done4:                 
-	.set reorder          
-
-	xor	$4,$3,$5
+	xor	$3,$3,$5
 	j	ra
-	sltu	$3,$4,1
+	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_64)
 
 
@@ -173,11 +169,11 @@
 	scd    $2, 0($4)         
 	beqz   $2, retry5   
 done5:                 
-	.set reorder          
 	sync
-	xor	$4,$3,$5
+	xor	$3,$3,$5
 	j	ra
-	sltu	$3,$4,1
+	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_acq_64)
 
 
@@ -191,11 +187,10 @@
 	scd    $2, 0($4)         
 	beqz   $2, retry6   
 done6:                 
-	.set reorder          
-
-	xor	$4,$3,$5
+	xor	$3,$3,$5
 	j	ra
-	sltu	$3,$4,1
+	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_rel_64)
 #endif /* __mips64 */
 
diff -ur openmpi-1.7a1r25913/opal/asm/generated/atomic-mips64el.s openmpi-1.7a1r25913m/opal/asm/generated/atomic-mips64el.s
--- openmpi-1.7a1r25913/opal/asm/generated/atomic-mips64el.s	2012-02-13 20:12:51.000000000 -0600
+++ openmpi-1.7a1r25913m/opal/asm/generated/atomic-mips64el.s	2012-02-14 17:15:22.960085743 -0600
@@ -67,11 +67,10 @@
 #endif
 	beqz   $2, retry1
 done1:                 
-	.set reorder          
-
 	xor	$3,$3,$5
 	j	ra
 	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_32)
 
 
@@ -103,11 +102,10 @@
 #ifdef __linux__
 	.set mips0
 #endif
-	.set reorder          
-
 	xor	$3,$3,$5
 	j	ra
 	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_acq_32)
 
 	
@@ -139,16 +137,15 @@
 #endif
 	beqz   $2, retry3   
 done3:                 
-	.set reorder          
-
 	xor	$3,$3,$5
 	j	ra
 	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_rel_32)
 	
 #ifdef __mips64	
 LEAF(opal_atomic_cmpset_64)
-		.set noreorder        
+	.set noreorder        
 retry4:                
 	lld    $3, 0($4)         
 	bne    $3, $5, done4   
@@ -156,11 +153,10 @@
 	scd    $2, 0($4)         
 	beqz   $2, retry4   
 done4:                 
-	.set reorder          
-
-	xor	$4,$3,$5
+	xor	$3,$3,$5
 	j	ra
-	sltu	$3,$4,1
+	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_64)
 
 
@@ -173,11 +169,11 @@
 	scd    $2, 0($4)         
 	beqz   $2, retry5   
 done5:                 
-	.set reorder          
 	sync
-	xor	$4,$3,$5
+	xor	$3,$3,$5
 	j	ra
-	sltu	$3,$4,1
+	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_acq_64)
 
 
@@ -191,10 +187,9 @@
 	scd    $2, 0($4)         
 	beqz   $2, retry6   
 done6:                 
-	.set reorder          
-
-	xor	$4,$3,$5
+	xor	$3,$3,$5
 	j	ra
-	sltu	$3,$4,1
+	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_rel_64)
 #endif /* __mips64 */

