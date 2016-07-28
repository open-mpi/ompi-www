<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 25 18:02:10 2005" -->
<!-- isoreceived="20050825230210" -->
<!-- sent="Thu, 25 Aug 2005 18:02:07 -0500" -->
<!-- isosent="20050825230207" -->
<!-- name="Troy Benjegerdes" -->
<!-- email="hozer_at_[hidden]" -->
<!-- subject="Re:  OpenIB results" -->
<!-- id="20050825230207.GP1685_at_kalmia.hozed.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="47a4ac37bce32062b5f327415ab32674_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-08-25 18:02:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0238.php">Jeff Squyres: "Re:  OpenIB results"</a>
<li><strong>Previous message:</strong> <a href="0236.php">Jeff Squyres: "Re:  OpenIB results"</a>
<li><strong>In reply to:</strong> <a href="0236.php">Jeff Squyres: "Re:  OpenIB results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0238.php">Jeff Squyres: "Re:  OpenIB results"</a>
<li><strong>Reply:</strong> <a href="0238.php">Jeff Squyres: "Re:  OpenIB results"</a>
<li><strong>Reply:</strong> <a href="0239.php">Troy Benjegerdes: "Re:  OpenIB results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Aug 25, 2005 at 04:12:59PM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Aug 25, 2005, at 3:45 PM, Troy Benjegerdes wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  42:     771 bytes  12011 times --&gt;   1063.33 Mbps in       5.53 usec
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  43:    1021 bytes   6095 times --&gt; mpirun noticed that job rank 1 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; with
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; PID 5569 on node &quot;da5&quot; exited on signal 11.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1 process killed (possibly by Open MPI)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; What are you using for your benchmark? You might try using the --debug
</span><br>
<span class="quotelev3">&gt; &gt;&gt; flag to mpirun for additional output.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; That was my next question.. is there a 'debugging OpenMPI FAQ' ?
</span><br>
<span class="quotelev2">&gt; &gt; (The benchmark was NetPIPE 3.6.2)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not yet -- but I [unfortunately] am the web master 
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>).  :-)  Adding things to the FAQ is 
</span><br>
<span class="quotelev1">&gt; trivial.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (moving to a telephone call to discuss this stuff higher bandwidth with 
</span><br>
<span class="quotelev1">&gt; Troy -- will post results back here and potentially create a debugging 
</span><br>
<span class="quotelev1">&gt; FAQ...)
</span><br>
<p>Okay, I tried libtool 1.6-1.5a or whatever strange version is in debian
<br>
experimental..
<br>
<p>troy_at_opteron1:/usr/src/ompi$ dpkg -l libtool
<br>
Desired=Unknown/Install/Remove/Purge/Hold
<br>
|
<br>
Status=Not/Installed/Config-files/Unpacked/Failed-config/Half-installed
<br>
|/ Err?=(none)/Hold/Reinst-required/X=both-problems (Status,Err:
<br>
uppercase=bad)
<br>
||/ Name           Version        Description
<br>
+++-==============-==============-============================================
<br>
ii  libtool        1.6-0+1.5a-4   Generic library support script
<br>
troy_at_opteron1:/usr/src/ompi$ libtool --version
<br>
ltmain.sh (GNU libtool 1.1467 2004/04/01 04:43:56
<br>
<p>and autogen.sh fails.. what versions of libtool are known to work?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0238.php">Jeff Squyres: "Re:  OpenIB results"</a>
<li><strong>Previous message:</strong> <a href="0236.php">Jeff Squyres: "Re:  OpenIB results"</a>
<li><strong>In reply to:</strong> <a href="0236.php">Jeff Squyres: "Re:  OpenIB results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0238.php">Jeff Squyres: "Re:  OpenIB results"</a>
<li><strong>Reply:</strong> <a href="0238.php">Jeff Squyres: "Re:  OpenIB results"</a>
<li><strong>Reply:</strong> <a href="0239.php">Troy Benjegerdes: "Re:  OpenIB results"</a>
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
