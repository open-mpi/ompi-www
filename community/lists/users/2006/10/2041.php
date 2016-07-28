<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 23 21:26:37 2006" -->
<!-- isoreceived="20061024012637" -->
<!-- sent="Mon, 23 Oct 2006 21:26:30 -0400" -->
<!-- isosent="20061024012630" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] quick patch to buildrpm.sh to enable building on SuSE" -->
<!-- id="9C2A3E78-65F0-4FE9-9DAF-767205A36104_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="453D4CBE.8050404_at_scalableinformatics.com" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-23 21:26:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2042.php">Tony Ladd: "[OMPI users] Dual Gigabit ethernet support"</a>
<li><strong>Previous message:</strong> <a href="2040.php">Joe Landman: "[OMPI users] quick patch to buildrpm.sh to enable building on SuSE"</a>
<li><strong>In reply to:</strong> <a href="2040.php">Joe Landman: "[OMPI users] quick patch to buildrpm.sh to enable building on SuSE"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Committed -- thanks!
<br>
<p>On Oct 23, 2006, at 7:14 PM, Joe Landman wrote:
<br>
<p><span class="quotelev1">&gt; --- buildrpm.sh 2006-10-23 17:59:33.729764603 -0400
</span><br>
<span class="quotelev1">&gt; +++ buildrpm-fixed.sh   2006-10-23 17:58:33.145635240 -0400
</span><br>
<span class="quotelev1">&gt; @@ -11,6 +11,7 @@
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  prefix=&quot;/opt/openmpi&quot;
</span><br>
<span class="quotelev1">&gt; +#/1.1.2/pgi&quot;
</span><br>
<span class="quotelev1">&gt;  specfile=&quot;openmpi.spec&quot;
</span><br>
<span class="quotelev1">&gt;  rpmbuild_options=&quot;--define 'mflags -j4'&quot;
</span><br>
<span class="quotelev1">&gt;  configure_options=
</span><br>
<span class="quotelev1">&gt; @@ -22,10 +23,10 @@
</span><br>
<span class="quotelev1">&gt;  # Some distro's will attempt to force using bizarre, custom compiler
</span><br>
<span class="quotelev1">&gt;  # names (e.g., i386-redhat-linux-gnu-gcc).  So hardwire them to use
</span><br>
<span class="quotelev1">&gt;  # &quot;normal&quot; names.
</span><br>
<span class="quotelev1">&gt; -#export CC=gcc
</span><br>
<span class="quotelev1">&gt; -#export CXX=g++
</span><br>
<span class="quotelev1">&gt; -#export F77=f77
</span><br>
<span class="quotelev1">&gt; -#export FC=
</span><br>
<span class="quotelev1">&gt; +#export CC=pgcc
</span><br>
<span class="quotelev1">&gt; +#export CXX=pgCC
</span><br>
<span class="quotelev1">&gt; +#export F77=pgf77
</span><br>
<span class="quotelev1">&gt; +#export FC=pgf90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  # Note that this script can build one or all of the following RPMs:
</span><br>
<span class="quotelev1">&gt;  # SRPM, all-in-one, multiple.
</span><br>
<span class="quotelev1">&gt; @@ -35,7 +36,7 @@
</span><br>
<span class="quotelev1">&gt;  # If you want to build the &quot;all in one RPM&quot;, put &quot;yes&quot; here
</span><br>
<span class="quotelev1">&gt;  build_single=no
</span><br>
<span class="quotelev1">&gt;  # If you want to build the &quot;multiple&quot; RPMs, put &quot;yes&quot; here
</span><br>
<span class="quotelev1">&gt; -build_multiple=no
</span><br>
<span class="quotelev1">&gt; +build_multiple=yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; ###################################################################### 
</span><br>
<span class="quotelev1">&gt; ###
</span><br>
<span class="quotelev1">&gt;  # You should not need to change anything below this line
</span><br>
<span class="quotelev1">&gt; @@ -109,6 +110,9 @@
</span><br>
<span class="quotelev1">&gt;  elif test -d /usr/src/RPM; then
</span><br>
<span class="quotelev1">&gt;      need_root=1
</span><br>
<span class="quotelev1">&gt;      rpmtopdir=&quot;/usr/src/RPM&quot;
</span><br>
<span class="quotelev1">&gt; +elif test -d /usr/src/packages; then
</span><br>
<span class="quotelev1">&gt; +    need_root=1
</span><br>
<span class="quotelev1">&gt; +    rpmtopdir=&quot;/usr/src/packages&quot;
</span><br>
<span class="quotelev1">&gt;  else
</span><br>
<span class="quotelev1">&gt;      need_root=1
</span><br>
<span class="quotelev1">&gt;      rpmtopdir=&quot;/usr/src/redhat&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Joe Landman
</span><br>
<span class="quotelev1">&gt; landman |at| scalableinformatics |dot| com
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2042.php">Tony Ladd: "[OMPI users] Dual Gigabit ethernet support"</a>
<li><strong>Previous message:</strong> <a href="2040.php">Joe Landman: "[OMPI users] quick patch to buildrpm.sh to enable building on SuSE"</a>
<li><strong>In reply to:</strong> <a href="2040.php">Joe Landman: "[OMPI users] quick patch to buildrpm.sh to enable building on SuSE"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
