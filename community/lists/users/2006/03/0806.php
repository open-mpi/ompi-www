<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar  9 19:44:22 2006" -->
<!-- isoreceived="20060310004422" -->
<!-- sent="Thu, 09 Mar 2006 17:43:41 -0700" -->
<!-- isosent="20060310004341" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Myrinet on linux cluster" -->
<!-- id="op.s559m31vies9li_at_rygel.lnxi.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="44108724.9050301_at_reachone.com" -->
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
<strong>From:</strong> Troy Telford (<em>ttelford_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-09 19:43:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0807.php">Tom Rosmond: "Re: [OMPI users] Myrinet on linux cluster"</a>
<li><strong>Previous message:</strong> <a href="0805.php">Troy Telford: "[OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="0802.php">Tom Rosmond: "[OMPI users] Myrinet on linux cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0807.php">Tom Rosmond: "Re: [OMPI users] Myrinet on linux cluster"</a>
<li><strong>Reply:</strong> <a href="0807.php">Tom Rosmond: "Re: [OMPI users] Myrinet on linux cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; The configure seemed to go OK, but the make failed.  As you see at the
</span><br>
<span class="quotelev1">&gt; end of the
</span><br>
<span class="quotelev1">&gt; make output, it doesn't like the format of libgm.so.  It looks to me
</span><br>
<span class="quotelev1">&gt; that it is using
</span><br>
<span class="quotelev1">&gt; a path (/usr/lib/.....) to 32 bit libraries, rather than 64 bit
</span><br>
<span class="quotelev1">&gt; (/usr/lib64/....).   Is this
</span><br>
<span class="quotelev1">&gt; correct?  What's the solution?
</span><br>
<p>First thing's first:  Does it compile okay with gcc?
<br>
<p>I say this because PGI's compiler has proven stubborn from time to time:   
<br>
I can compile Open MPI with PGI 6.0 just fine, but PGI 6.1 won't compile  
<br>
for me either (different reasons, though -- I posted my problem earlier  
<br>
this week).
<br>
<p>That being said:
<br>
The distros get mixed in my mind, so I'm not sure if yours is one that:
<br>
a.)  Puts 32-bit libs in /lib32 and /usr/lib32, with 64-bit libs in /lib64  
<br>
and /usr/lib64 (and /lib points to lib64)
<br>
b.)  32-bit libs are in /lib and /usr/lib, and 64-bit are in /lib64 and  
<br>
/usr/lib64
<br>
<p>If your machine is a 'b' then yes, it does appear to be trying (and  
<br>
failing) to use a 32-bit libgm.so
<br>
<p>The first thing I'd do is make sure you have a 64-bit version of libgm.so;  
<br>
at least that is what I suspect.
<br>
<p>Locate all instances of libgm.so, run 'file libgm.so' to ensure one of 'em  
<br>
is 64-bit, and that the 64-bit library is in a path where the linker can  
<br>
find it (ld.so.conf or LD_LIBRARY_PATH).
<br>
<pre>
-- 
Troy Telford
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0807.php">Tom Rosmond: "Re: [OMPI users] Myrinet on linux cluster"</a>
<li><strong>Previous message:</strong> <a href="0805.php">Troy Telford: "[OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="0802.php">Tom Rosmond: "[OMPI users] Myrinet on linux cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0807.php">Tom Rosmond: "Re: [OMPI users] Myrinet on linux cluster"</a>
<li><strong>Reply:</strong> <a href="0807.php">Tom Rosmond: "Re: [OMPI users] Myrinet on linux cluster"</a>
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
