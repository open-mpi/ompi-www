<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 16 02:03:46 2006" -->
<!-- isoreceived="20061016060346" -->
<!-- sent="Mon, 16 Oct 2006 00:03:25 -0600" -->
<!-- isosent="20061016060325" -->
<!-- name="Josh England" -->
<!-- email="jjengla_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem building static w/ 1.1.2_rc4" -->
<!-- id="1160978605.9948.28.camel_at_localhost" -->
<!-- inreplyto="1160976706.9948.25.camel_at_localhost" -->
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
<strong>From:</strong> Josh England (<em>jjengla_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-16 02:03:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1986.php">Åke Sandgren: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Previous message:</strong> <a href="1984.php">Josh England: "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<li><strong>In reply to:</strong> <a href="1984.php">Josh England: "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1992.php">Jeff Squyres: "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<li><strong>Reply:</strong> <a href="1992.php">Jeff Squyres: "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, 2006-10-15 at 23:31 -0600, Josh England wrote:
<br>
<span class="quotelev1">&gt; On Sat, 2006-10-14 at 09:35 -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Given the messages from the linker and my prior mail, I'm not sure  
</span><br>
<span class="quotelev2">&gt; &gt; that a) is possible -- it will require more poking around to know for  
</span><br>
<span class="quotelev2">&gt; &gt; sure.  b) is definitely possible simply by using --enable-static and  
</span><br>
<span class="quotelev2">&gt; &gt; and then using &quot;mpicc&quot; (and friends) as normal.   
</span><br>
<span class="quotelev2">&gt; &gt; OMPI will be built statically (to include torque and libibverbs,  
</span><br>
<span class="quotelev2">&gt; &gt; assuming you have .a's versions of both of those), but as Scott  
</span><br>
<span class="quotelev2">&gt; &gt; mentioned, system libraries such as dl and sysfs will be linked  
</span><br>
<span class="quotelev2">&gt; &gt; dynamically.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OK.  I've got a build with --enable-static and --disable-shared, and I'm
</span><br>
<span class="quotelev1">&gt; still seeing the *exact* same behavior.  I cannot build a static library
</span><br>
<span class="quotelev1">&gt; either with mpicc or specifying a manual link line.  Note that this
</span><br>
<span class="quotelev1">&gt; appears to be a problem only with 1.1.2_rc4.  Open MPI version 1.1.1
</span><br>
<span class="quotelev1">&gt; seems to work.
</span><br>
<p>Sorry.  I wrote too fast.  Version 1.1.1 actually *does not* work for
<br>
static builds either.  It exhibits the same problem described in the
<br>
original post.
<br>
<p>-JE
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1986.php">Åke Sandgren: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Previous message:</strong> <a href="1984.php">Josh England: "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<li><strong>In reply to:</strong> <a href="1984.php">Josh England: "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1992.php">Jeff Squyres: "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<li><strong>Reply:</strong> <a href="1992.php">Jeff Squyres: "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
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
