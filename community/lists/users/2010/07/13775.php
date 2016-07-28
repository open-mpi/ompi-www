<?
$subject_val = "Re: [OMPI users] mpiexec hangs - new install";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 25 22:10:49 2010" -->
<!-- isoreceived="20100726021049" -->
<!-- sent="Mon, 26 Jul 2010 14:10:42 +1200" -->
<!-- isosent="20100726021042" -->
<!-- name="Kevin.Buckley_at_[hidden]" -->
<!-- email="Kevin.Buckley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpiexec hangs - new install" -->
<!-- id="47c9bdc209d429d29d489a5e5f10fd24.squirrel_at_mail.ecs.vuw.ac.nz" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="op.vge0vr0c75arni_at_t61.site" -->
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
<strong>From:</strong> <a href="mailto:Kevin.Buckley_at_[hidden]?Subject=Re:%20[OMPI%20users]%20mpiexec%20hangs%20-%20new%20install"><em>Kevin.Buckley_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-07-25 22:10:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13776.php">James: "Re: [OMPI users] mpiexec hangs - new install"</a>
<li><strong>Previous message:</strong> <a href="13774.php">Jack Bryan: "[OMPI users] OpenMPI Segmentation fault (11)"</a>
<li><strong>In reply to:</strong> <a href="13773.php">James: "Re: [OMPI users] mpiexec hangs - new install"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13776.php">James: "Re: [OMPI users] mpiexec hangs - new install"</a>
<li><strong>Reply:</strong> <a href="13776.php">James: "Re: [OMPI users] mpiexec hangs - new install"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Here's what seems to be a solution that works for SuSE.  May be
</span><br>
<span class="quotelev1">&gt; something similar for other systems:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    1) Edit the file /etc/sysconfig/SuseFirewall2
</span><br>
<span class="quotelev1">&gt;    2) Look for the keyword FW_TRUSTED_NETS
</span><br>
<span class="quotelev1">&gt;    3) Add the IP addresses of your internal machines there.  The format
</span><br>
<span class="quotelev1">&gt;       for multiple machines is wierd: &quot;192.168.10.0/8&quot; means all machines
</span><br>
<span class="quotelev1">&gt;       in 192.168.10.x.  There doesn't seem to be any way to specify a
</span><br>
<span class="quotelev1">&gt;       numeric range, like .100 to .110.
</span><br>
<p>Not a SUSE man and won't go into a full treatise on subnets
<br>
and netmasks but ...
<br>
<p>192.168.10.0/8 actually means anything that has 192. at the start,
<br>
so you have opened things up slightly more widely than you may have
<br>
thought.
<br>
<p>I recall you said you had machines numbered 192.168.10.1xx ?
<br>
<p>If so, then 192.168.10.0/24 (&quot;slash 24&quot;) would be slightly better
<br>
for you than &quot;slash 8&quot; as that at least narrows things down to all
<br>
numeric addresses starting with:
<br>
<p>192.168.10.
<br>
<p>If you just wanted to &quot;trust&quot; to a single machine then this:
<br>
<p>192.168.10.100/32
<br>
<p>represents, in the syntax you have already seen in use, the single
<br>
machine, 192.168.10.100.
<br>
<p>Without wishing to make too many guesses as to what FW_TRUSTED_NETS
<br>
is doing but assuming that you can assign more than one &quot;netmask&quot; in
<br>
there and armed with the info above, you could add all of your own
<br>
machines individually by making:
<br>
<p>FW_TRUSTED_NETS
<br>
<p>take the values (three machine range, 101 -&gt; 103  here)
<br>
<p>192.168.10.100/32    192.168.10.101/32    192.168.10.102/32
<br>
<p>and so on: basically, treating each machine as a trusted &quot;network&quot;
<br>
of one machine.
<br>
<p>Again, the way one assigns multiple &quot;netmasks&quot; to FW_TRUSTED_NETS is
<br>
left to you to discover but I'm sure you will be able to do that.
<br>
<p>It might be a better, without being the best, way to do what you
<br>
want, or rather, to not do what you didn't want, to do.
<br>
<p><pre>
-- 
Kevin M. Buckley                                  Room:  CO327
School of Engineering and                         Phone: +64 4 463 5971
 Computer Science
Victoria University of Wellington
New Zealand
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13776.php">James: "Re: [OMPI users] mpiexec hangs - new install"</a>
<li><strong>Previous message:</strong> <a href="13774.php">Jack Bryan: "[OMPI users] OpenMPI Segmentation fault (11)"</a>
<li><strong>In reply to:</strong> <a href="13773.php">James: "Re: [OMPI users] mpiexec hangs - new install"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13776.php">James: "Re: [OMPI users] mpiexec hangs - new install"</a>
<li><strong>Reply:</strong> <a href="13776.php">James: "Re: [OMPI users] mpiexec hangs - new install"</a>
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
