<?
$subject_val = "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 22 11:31:54 2016" -->
<!-- isoreceived="20160722153154" -->
<!-- sent="Fri, 22 Jul 2016 11:31:53 -0400" -->
<!-- isosent="20160722153153" -->
<!-- name="Michael Di Domenico" -->
<!-- email="mdidomenico4_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.10.2 and PGI 15.9" -->
<!-- id="CABOsP2NuAXOQAoY8fn-4CrADuSO9d_fVi0O3idVcSSdoR=en9w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="557e6ba9-ed3e-3e2a-7a23-4a53efa2f258_at_nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.10.2 and PGI 15.9<br>
<strong>From:</strong> Michael Di Domenico (<em>mdidomenico4_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-22 11:31:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29703.php">Jeff Hammond: "[OMPI users] ompi_info -c does not print configure arguments"</a>
<li><strong>Previous message:</strong> <a href="29701.php">Gilles Gouaillardet: "Re: [OMPI users] ORTE daemon error"</a>
<li><strong>In reply to:</strong> <a href="29692.php">Sylvain Jeaugey: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29706.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>Reply:</strong> <a href="29706.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So, the -noswitcherror is partially working.  I added the switch into
<br>
my configure line LDFLAGS param.  I can see the parameter being passed
<br>
to libtool, but for some reason libtool is refusing to passing it
<br>
along at compile.
<br>
<p>if i sh -x the libtool command line, i can see it set in a few
<br>
variables, but at the end when eval's the compile line for pgcc the
<br>
option is missing.
<br>
<p>if i cut and past the eval line and hand put it back in, the library
<br>
compiles with a pgcc warning instead of an error which i believe what
<br>
i want, but i'm not sure why libtool is dropping the switch
<br>
<p><p><p>On Tue, Jul 19, 2016 at 5:27 AM, Sylvain Jeaugey &lt;sjeaugey_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; As a workaround, you can also try adding -noswitcherror to PGCC flags.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 07/11/2016 03:52 PM, &#195;&#133;ke Sandgren wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looks like you are compiling with slurm support.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If so, you need to remove the &quot;-pthread&quot; from libslurm.la and libpmi.la
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 07/11/2016 02:54 PM, Michael Di Domenico wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm trying to get openmpi compiled using the PGI compiler.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the configure goes through and the code starts to compile, but then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gets hung up with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; entering: openmpi-1.10.2/opal/mca/common/pmi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CC common_pmi.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CCLD libmca_common_pmi.la
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pgcc-Error-Unknown switch: - pthread
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29635.php">http://www.open-mpi.org/community/lists/users/2016/07/29635.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may
</span><br>
<span class="quotelev1">&gt; contain
</span><br>
<span class="quotelev1">&gt; confidential information.  Any unauthorized review, use, disclosure or
</span><br>
<span class="quotelev1">&gt; distribution
</span><br>
<span class="quotelev1">&gt; is prohibited.  If you are not the intended recipient, please contact the
</span><br>
<span class="quotelev1">&gt; sender by
</span><br>
<span class="quotelev1">&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29692.php">http://www.open-mpi.org/community/lists/users/2016/07/29692.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29703.php">Jeff Hammond: "[OMPI users] ompi_info -c does not print configure arguments"</a>
<li><strong>Previous message:</strong> <a href="29701.php">Gilles Gouaillardet: "Re: [OMPI users] ORTE daemon error"</a>
<li><strong>In reply to:</strong> <a href="29692.php">Sylvain Jeaugey: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29706.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>Reply:</strong> <a href="29706.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
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
