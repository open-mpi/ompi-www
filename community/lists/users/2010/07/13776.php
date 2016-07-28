<?
$subject_val = "Re: [OMPI users] mpiexec hangs - new install";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 26 00:01:44 2010" -->
<!-- isoreceived="20100726040144" -->
<!-- sent="Sun, 25 Jul 2010 21:01:52 -0700" -->
<!-- isosent="20100726040152" -->
<!-- name="James" -->
<!-- email="jamesqf_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpiexec hangs - new install" -->
<!-- id="op.vgfmte0e75arni_at_t61.site" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="47c9bdc209d429d29d489a5e5f10fd24.squirrel_at_mail.ecs.vuw.ac.nz" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpiexec hangs - new install<br>
<strong>From:</strong> James (<em>jamesqf_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-26 00:01:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13777.php">jody: "Re: [OMPI users] OpenMPI Segmentation fault (11)"</a>
<li><strong>Previous message:</strong> <a href="13775.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] mpiexec hangs - new install"</a>
<li><strong>In reply to:</strong> <a href="13775.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] mpiexec hangs - new install"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, 25 Jul 2010 19:10:42 -0700, &lt;Kevin.Buckley_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I recall you said you had machines numbered 192.168.10.1xx ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If so, then 192.168.10.0/24 (&quot;slash 24&quot;) would be slightly better
</span><br>
<span class="quotelev1">&gt; for you than &quot;slash 8&quot; as that at least narrows things down to all
</span><br>
<span class="quotelev1">&gt; numeric addresses starting with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 192.168.10.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you just wanted to &quot;trust&quot; to a single machine then this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 192.168.10.100/32
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; represents, in the syntax you have already seen in use, the single
</span><br>
<span class="quotelev1">&gt; machine, 192.168.10.100.
</span><br>
<p>Thanks!  The syntax wasn't explained in any of the info I found - which
<br>
included nothing so basic as a manual or HowTo doc - so I was trying to
<br>
guess from examples.  I figured that /8 meant &quot;mask off the last 8 bits&quot;,
<br>
but apparently it's &quot;mask everything but the first 8&quot;.
<br>
<p><p><span class="quotelev1">&gt; Without wishing to make too many guesses as to what FW_TRUSTED_NETS
</span><br>
<span class="quotelev1">&gt; is doing but assuming that you can assign more than one &quot;netmask&quot; in
</span><br>
<span class="quotelev1">&gt; there and armed with the info above, you could add all of your own
</span><br>
<span class="quotelev1">&gt; machines individually by making:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FW_TRUSTED_NETS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; take the values (three machine range, 101 -&gt; 103  here)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 192.168.10.100/32    192.168.10.101/32    192.168.10.102/32
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and so on: basically, treating each machine as a trusted &quot;network&quot;
</span><br>
<span class="quotelev1">&gt; of one machine.
</span><br>
<p>It also allows listing of individual machines, e.g. &quot;192.168.10.100
<br>
192.168.10.101 192.168.10.102...&quot;, but I figured it could get tedious
<br>
updating the list on every machine each time I add one.
<br>
<p>Thanks,
<br>
James
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13777.php">jody: "Re: [OMPI users] OpenMPI Segmentation fault (11)"</a>
<li><strong>Previous message:</strong> <a href="13775.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] mpiexec hangs - new install"</a>
<li><strong>In reply to:</strong> <a href="13775.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] mpiexec hangs - new install"</a>
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
