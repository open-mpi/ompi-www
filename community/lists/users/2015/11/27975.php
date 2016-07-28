<?
$subject_val = "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  2 17:02:50 2015" -->
<!-- isoreceived="20151102220250" -->
<!-- sent="Mon, 2 Nov 2015 23:02:45 +0100" -->
<!-- isosent="20151102220245" -->
<!-- name="Fabian Wein" -->
<!-- email="fabian.wein_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel" -->
<!-- id="524DEB12-D209-4228-97CD-4BBBB490A3E0_at_fau.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="87ziywqwgc.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel<br>
<strong>From:</strong> Fabian Wein (<em>fabian.wein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-02 17:02:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27976.php">Jeff Hammond: "[OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)"</a>
<li><strong>Previous message:</strong> <a href="27974.php">Lloyd Brown: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>In reply to:</strong> <a href="27972.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27980.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Reply:</strong> <a href="27980.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Am 02.11.2015 um 15:58 schrieb Dave Love &lt;d.love_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fabian Wein &lt;fabian.wein_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am 30.10.2015 um 21:45 schrieb Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oh, that's an interesting idea: perhaps the &quot;bind to numa&quot; is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failing -- but perhaps &quot;bind to socket&quot; would work.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you try:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi-1.10.0-gcc/bin/mpiexec -bind-to numa -n 4 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi-1.10.0-gcc/bin/mpiexec -bind-to socket -n 4 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Both report the same error. Interestingly -bind-to-socket works
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There's something badly wrong with your build or installation if
</span><br>
<span class="quotelev1">&gt; -bind-to socket isn't equivalent to --bind-to-socket (which is the
</span><br>
<span class="quotelev1">&gt; default, as you should see if you run hwloc-ps under mpirun).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just built 1.10 on Ubuntu 14.04 against the native libhwloc 1.8
</span><br>
<span class="quotelev1">&gt; (without libnuma1-dev).  It works as expected on that single-socket
</span><br>
<span class="quotelev1">&gt; system and --bind-to numa fails as there's no numanode level.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I got the same problems on a second 14.04 system. I don&#226;&#128;&#153;t know what I&#226;&#128;&#153;m doing wrong.
<br>
I&#226;&#128;&#153;ll install a fresh Ubunut 14.04 on a standard system, at least -bind-to core shall work there.
<br>
<p>There is an old OpenFOAM installation which includes and old open-mpi, this might 
<br>
cause the trouble. I also suspect that sourcing the Intel 2016 compilers somehow disturbs. 
<br>
<p>I don&#226;&#128;&#153;t know how to check if hwloc supports numa, sockets, &#226;&#128;&#166; But if I 
<br>
configure 1.11.1 I see on in the configure output. Therefore I build it manually.
<br>
<p><p><span class="quotelev2">&gt;&gt; but it does not bring me the performance I expect for the petsc benchmark.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Without a sane installation it's probably irrelevant, but performance
</span><br>
<span class="quotelev1">&gt; relative to what?  Anyhow, why don't you want to bind to cores, or at
</span><br>
<span class="quotelev1">&gt; least L2 cache, if that&#226;&#128;&#153;s shared?
</span><br>
<p>I compare the performance of the petsc stream benchmark with a similar but older
<br>
4 packages 24 cores opteron system and there -bind-to numa results in a significant
<br>
increase in performance.
<br>
<p>Anyhow, I finally managed to compile mpich (there were issues with the intel compilers) and mpich allows bindings on my system. I still have to find out the optimal binding/ mapping, simply binding to numa as in the other system doesn&#226;&#128;&#153;t work but the topology is different. I&#226;&#128;&#153;m a user and new to MPI, I still have to learn a lot. 
<br>
<p>Thanks for all your time and thoughts and willing in helping me.
<br>
<p>Fabian
<br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/11/27972.php">http://www.open-mpi.org/community/lists/users/2015/11/27972.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27976.php">Jeff Hammond: "[OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)"</a>
<li><strong>Previous message:</strong> <a href="27974.php">Lloyd Brown: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>In reply to:</strong> <a href="27972.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27980.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Reply:</strong> <a href="27980.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
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
