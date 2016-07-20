<?
$subject_val = "Re: [hwloc-users] Patch to disable GCC __builtin_ operations";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  9 08:51:41 2011" -->
<!-- isoreceived="20110609125141" -->
<!-- sent="Thu, 9 Jun 2011 08:51:36 -0400" -->
<!-- isosent="20110609125136" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Patch to disable GCC __builtin_ operations" -->
<!-- id="BANLkTi=3rstRxukersV4DCsnPRkC5Bjqyg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20110608215843.GH4889_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Patch to disable GCC __builtin_ operations<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-09 08:51:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0298.php">Samuel Thibault: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>Previous message:</strong> <a href="0296.php">Samuel Thibault: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>In reply to:</strong> <a href="0296.php">Samuel Thibault: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0298.php">Samuel Thibault: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The odd thing about this environment is that the head node seems to
<br>
have a slightly different setup than the compute nodes (not sure why
<br>
exactly, but that's what it is). So hwloc is configured and runs
<br>
correctly on the head node, but when it is asked to run on the compute
<br>
nodes it segvs at the call site of the __builtin_ functions.
<br>
<p>For Open MPI, hwloc can only be built one way and needs to run on both
<br>
the compute and head nodes - so configuring hwloc two ways is not an
<br>
option. Further, to have two different installs I need to be able to
<br>
build on the compute nodes, which I cannot.
<br>
<p>I suspect that the ABI compatibility of the libc interface is what is
<br>
enabling the remainder of the code to work in both environments, and
<br>
that the __builtin_ functions bypass that ABI to put in system
<br>
specific code that (for whatever reason) does not match on the compute
<br>
nodes.
<br>
<p>I agree it is a somewhat exotic environment, and I am open to other
<br>
possible solutions. This patch does fix the problem, and so does
<br>
compiling with a non-gcc compiler - though essentially the same work
<br>
around. If there was a way to tell gcc directly to not allow
<br>
__builtin_ then I would do that, but no such option seems to exist.
<br>
<p><p>Per Jeff's comment, we could turn it off by default in Open MPI, but
<br>
it would come at a slight performance penalty as Dave mentioned. Since
<br>
the number of environments in which this would be a problem are small,
<br>
I would suggest leaving it enabled in Open MPI and documenting the
<br>
configure option. For this system we already pass a large number of
<br>
configure options to get things to work correctly, this would just be
<br>
one more.
<br>
<p><p>-- Josh
<br>
<p>On Wed, Jun 8, 2011 at 5:58 PM, Samuel Thibault
<br>
&lt;samuel.thibault_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Josh Hursey, le Wed 08 Jun 2011 22:28:53 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; I hit a problem when installing hwloc statically on a machine with a
</span><br>
<span class="quotelev2">&gt;&gt; slightly different gcc support libraries and OSs on the head/compile
</span><br>
<span class="quotelev2">&gt;&gt; node versus the compute nodes. The builtin functions would cause hwloc
</span><br>
<span class="quotelev2">&gt;&gt; to segfault when run on the compute nodes. By disabling the builtin
</span><br>
<span class="quotelev2">&gt;&gt; operations, and using the more portable techniques seemed to do the
</span><br>
<span class="quotelev2">&gt;&gt; trick.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is very odd. &#160;How does it segfault exactly? &#160;Unless you are (or
</span><br>
<span class="quotelev1">&gt; your distribution is) using an -march=something option, gcc is not
</span><br>
<span class="quotelev1">&gt; supposed to produce code which can not be run on another machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0298.php">Samuel Thibault: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>Previous message:</strong> <a href="0296.php">Samuel Thibault: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>In reply to:</strong> <a href="0296.php">Samuel Thibault: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0298.php">Samuel Thibault: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
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
