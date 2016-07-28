<?
$subject_val = "Re: [OMPI users] Problem in remote nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 17 12:51:11 2010" -->
<!-- isoreceived="20100317165111" -->
<!-- sent="Wed, 17 Mar 2010 13:51:07 -0300" -->
<!-- isosent="20100317165107" -->
<!-- name="Fernando Lemos" -->
<!-- email="fernandotcl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem in remote nodes" -->
<!-- id="9108753b1003170951y3aed98a9kde02ed7a534b4cfb_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6F7DF240-07BC-4F6C-B16F-50A34BE8A321_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem in remote nodes<br>
<strong>From:</strong> Fernando Lemos (<em>fernandotcl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-17 12:51:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12376.php">Richard Treumann: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<li><strong>Previous message:</strong> <a href="12374.php">Jeff Squyres: "Re: [OMPI users] Signal code: Address not mapped (1) error"</a>
<li><strong>In reply to:</strong> <a href="12373.php">Jeff Squyres: "Re: [OMPI users] Problem in remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12381.php">uriz.49949_at_[hidden]: "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>Reply:</strong> <a href="12381.php">uriz.49949_at_[hidden]: "Re: [OMPI users] Problem in remote nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Mar 17, 2010 at 1:41 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Mar 17, 2010, at 4:39 AM, &lt;uriz.49949_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi everyone I'm a new Open MPI user and I have just installed Open MPI in
</span><br>
<span class="quotelev2">&gt;&gt; a 6 nodes cluster with Scientific Linux. When I execute it in local it
</span><br>
<span class="quotelev2">&gt;&gt; works perfectly, but when I try to execute it on the remote nodes with the
</span><br>
<span class="quotelev2">&gt;&gt; --host &#160;option it hangs and gives no message. I think that the problem
</span><br>
<span class="quotelev2">&gt;&gt; could be with the shared libraries but i'm not sure. In my opinion the
</span><br>
<span class="quotelev2">&gt;&gt; problem is not ssh because i can access to the nodes with no password
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might want to check that Open MPI processes are actually running on the remote nodes -- check with ps if you see any &quot;orted&quot; or other MPI-related processes (e.g., your processes).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have any TCP firewall software running between the nodes? &#160;If so, you'll need to disable it (at least for Open MPI jobs).
</span><br>
<p>I also recommend running mpirun with the option --mca btl_base_verbose
<br>
30 to troubleshoot tcp issues.
<br>
<p>In some environments, you need to explicitly tell mpirun what network
<br>
interfaces it can use to reach the hosts. Read the following FAQ
<br>
section for more information:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=tcp">http://www.open-mpi.org/faq/?category=tcp</a>
<br>
<p>Item 7 of the FAQ might be of special interest.
<br>
<p>Regards,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12376.php">Richard Treumann: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<li><strong>Previous message:</strong> <a href="12374.php">Jeff Squyres: "Re: [OMPI users] Signal code: Address not mapped (1) error"</a>
<li><strong>In reply to:</strong> <a href="12373.php">Jeff Squyres: "Re: [OMPI users] Problem in remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12381.php">uriz.49949_at_[hidden]: "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>Reply:</strong> <a href="12381.php">uriz.49949_at_[hidden]: "Re: [OMPI users] Problem in remote nodes"</a>
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
