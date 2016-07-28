<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 10 09:07:47 2006" -->
<!-- isoreceived="20060310140747" -->
<!-- sent="Fri, 10 Mar 2006 09:07:45 -0500" -->
<!-- isosent="20060310140745" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Myrinet on linux cluster" -->
<!-- id="251B6507-B61B-46D0-A15A-C8A4A6D10EF9_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="86D61AAB-DF64-40D9-A1BD-061BAD16A9B0_at_open-mpi.org" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-10 09:07:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0825.php">Brian Barrett: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>Previous message:</strong> <a href="0823.php">Brian Barrett: "Re: [OMPI users] Myrinet on linux cluster"</a>
<li><strong>In reply to:</strong> <a href="0823.php">Brian Barrett: "Re: [OMPI users] Myrinet on linux cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0827.php">Tom Rosmond: "Re: [OMPI users] Myrinet on linux cluster"</a>
<li><strong>Reply:</strong> <a href="0827.php">Tom Rosmond: "Re: [OMPI users] Myrinet on linux cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 10, 2006, at 8:35 AM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 9, 2006, at 11:37 PM, Tom Rosmond wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Attached are output files from a build with the adjustments you  
</span><br>
<span class="quotelev2">&gt;&gt; suggested.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; setenv FC pgf90
</span><br>
<span class="quotelev2">&gt;&gt; setenv F77 pgf90
</span><br>
<span class="quotelev2">&gt;&gt; setenv CCPFLAGS -I/usr/include/gm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure  --prefix=/users/rosmond/ompi  --with-gm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The results are the same.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, I figured the failure would still be there.  Sorry to make you  
</span><br>
<span class="quotelev1">&gt; do the extra work, but I needed a build without the extra issues so  
</span><br>
<span class="quotelev1">&gt; that I could try to get a clearer picture of what is going on.   
</span><br>
<span class="quotelev1">&gt; Unfortunately, it looks like libtool (the GNU project to build  
</span><br>
<span class="quotelev1">&gt; portable libraries) is doing something I didn't expect and causing  
</span><br>
<span class="quotelev1">&gt; issues.  I'm passing this on to a friend of Open MPI who works on  
</span><br>
<span class="quotelev1">&gt; the Libtool project and is extremely good at figuring these issues  
</span><br>
<span class="quotelev1">&gt; out.  I'll relay back what he recommends, but it might not be until  
</span><br>
<span class="quotelev1">&gt; Monday.
</span><br>
<p>The Libtool expert was wondering if you could send the contents of  
<br>
the files /usr/lib/libgm.la and /usr/lib64/libgm.la.  They should  
<br>
both be (fairly short) text files.
<br>
<p>Also, as a possible work-around, he suggests compiling from the top  
<br>
level like normal (just &quot;make&quot; or &quot;make all&quot;) until the failure,  
<br>
changing directories into ompi/mca/btl/gm (where the failure  
<br>
occurred) and running &quot;make LDFLAGS=-L/usr/lib64&quot;, then changing  
<br>
directories back to the top level of the Open MPI source code and  
<br>
running make (without the extra LDFLAGS option) again.  Let me know  
<br>
if that works.
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0825.php">Brian Barrett: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>Previous message:</strong> <a href="0823.php">Brian Barrett: "Re: [OMPI users] Myrinet on linux cluster"</a>
<li><strong>In reply to:</strong> <a href="0823.php">Brian Barrett: "Re: [OMPI users] Myrinet on linux cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0827.php">Tom Rosmond: "Re: [OMPI users] Myrinet on linux cluster"</a>
<li><strong>Reply:</strong> <a href="0827.php">Tom Rosmond: "Re: [OMPI users] Myrinet on linux cluster"</a>
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
