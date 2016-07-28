<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 25 10:11:44 2005" -->
<!-- isoreceived="20050825151144" -->
<!-- sent="Thu, 25 Aug 2005 10:11:40 -0500" -->
<!-- isosent="20050825151140" -->
<!-- name="Troy Benjegerdes" -->
<!-- email="hozer_at_[hidden]" -->
<!-- subject="Re:  OpenIB results" -->
<!-- id="20050825151140.GM1685_at_kalmia.hozed.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5356e8f99d6d0cec3122eee1b2650e97_at_open-mpi.org" -->
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
<strong>From:</strong> Troy Benjegerdes (<em>hozer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-25 10:11:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0234.php">Galen Mark Shipman: "Re:  OpenIB results"</a>
<li><strong>Previous message:</strong> <a href="0232.php">Jeff Squyres: "Re:  OpenIB results"</a>
<li><strong>In reply to:</strong> <a href="0232.php">Jeff Squyres: "Re:  OpenIB results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0234.php">Galen Mark Shipman: "Re:  OpenIB results"</a>
<li><strong>Reply:</strong> <a href="0234.php">Galen Mark Shipman: "Re:  OpenIB results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Aug 25, 2005 at 10:57:02AM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Aug 25, 2005, at 10:43 AM, Troy Benjegerdes wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Look for RTLD_GLOBAL in opal/libltdl/ltdl.c. If it is not there openib
</span><br>
<span class="quotelev3">&gt; &gt;&gt; will not work if compiled as dynamic module. What version of libtool 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; are
</span><br>
<span class="quotelev3">&gt; &gt;&gt; you using? Older libtool haven't used RTLD_GLOBAL for opening 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; libraries.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It's not there...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; troy_at_opteron1:~$ libtool --version
</span><br>
<span class="quotelev2">&gt; &gt; ltmain.sh (GNU libtool) 1.5.6 (1.1220.2.95 2004/04/11 05:50:42) 
</span><br>
<span class="quotelev2">&gt; &gt; Debian: 224 $
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did you build from a tarball or from Subversion?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you built from a tarball, it would have used the included LT 1.5.18. 
</span><br>
<span class="quotelev1">&gt;   If you built from Subversion, then you really need to update your 
</span><br>
<span class="quotelev1">&gt; Libtool to 1.5.18.  :-)
</span><br>
<p>What would you prefer I build from?
<br>
<p>I figured out I need -mca mpi_leave_pinned 1, but now I get:
<br>
<p>&nbsp;42:     771 bytes  12011 times --&gt;   1063.33 Mbps in       5.53 usec
<br>
&nbsp;43:    1021 bytes   6095 times --&gt; mpirun noticed that job rank 1 with
<br>
PID 5569 on node &quot;da5&quot; exited on signal 11.
<br>
1 process killed (possibly by Open MPI)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0234.php">Galen Mark Shipman: "Re:  OpenIB results"</a>
<li><strong>Previous message:</strong> <a href="0232.php">Jeff Squyres: "Re:  OpenIB results"</a>
<li><strong>In reply to:</strong> <a href="0232.php">Jeff Squyres: "Re:  OpenIB results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0234.php">Galen Mark Shipman: "Re:  OpenIB results"</a>
<li><strong>Reply:</strong> <a href="0234.php">Galen Mark Shipman: "Re:  OpenIB results"</a>
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
