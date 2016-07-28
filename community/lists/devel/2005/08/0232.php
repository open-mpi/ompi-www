<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 25 09:57:09 2005" -->
<!-- isoreceived="20050825145709" -->
<!-- sent="Thu, 25 Aug 2005 10:57:02 -0400" -->
<!-- isosent="20050825145702" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  OpenIB results" -->
<!-- id="5356e8f99d6d0cec3122eee1b2650e97_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050825144331.GK1685_at_kalmia.hozed.org" -->
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
<strong>Date:</strong> 2005-08-25 09:57:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0233.php">Troy Benjegerdes: "Re:  OpenIB results"</a>
<li><strong>Previous message:</strong> <a href="0231.php">Gleb Natapov: "Re:  OpenIB results"</a>
<li><strong>In reply to:</strong> <a href="0230.php">Troy Benjegerdes: "Re:  OpenIB results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0233.php">Troy Benjegerdes: "Re:  OpenIB results"</a>
<li><strong>Reply:</strong> <a href="0233.php">Troy Benjegerdes: "Re:  OpenIB results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 25, 2005, at 10:43 AM, Troy Benjegerdes wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Look for RTLD_GLOBAL in opal/libltdl/ltdl.c. If it is not there openib
</span><br>
<span class="quotelev2">&gt;&gt; will not work if compiled as dynamic module. What version of libtool 
</span><br>
<span class="quotelev2">&gt;&gt; are
</span><br>
<span class="quotelev2">&gt;&gt; you using? Older libtool haven't used RTLD_GLOBAL for opening 
</span><br>
<span class="quotelev2">&gt;&gt; libraries.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's not there...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; troy_at_opteron1:~$ libtool --version
</span><br>
<span class="quotelev1">&gt; ltmain.sh (GNU libtool) 1.5.6 (1.1220.2.95 2004/04/11 05:50:42) 
</span><br>
<span class="quotelev1">&gt; Debian: 224 $
</span><br>
<p>Did you build from a tarball or from Subversion?
<br>
<p>If you built from a tarball, it would have used the included LT 1.5.18. 
<br>
&nbsp;&nbsp;If you built from Subversion, then you really need to update your 
<br>
Libtool to 1.5.18.  :-)
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0233.php">Troy Benjegerdes: "Re:  OpenIB results"</a>
<li><strong>Previous message:</strong> <a href="0231.php">Gleb Natapov: "Re:  OpenIB results"</a>
<li><strong>In reply to:</strong> <a href="0230.php">Troy Benjegerdes: "Re:  OpenIB results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0233.php">Troy Benjegerdes: "Re:  OpenIB results"</a>
<li><strong>Reply:</strong> <a href="0233.php">Troy Benjegerdes: "Re:  OpenIB results"</a>
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
