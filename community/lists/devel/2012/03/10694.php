<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26118";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  9 09:46:27 2012" -->
<!-- isoreceived="20120309144627" -->
<!-- sent="Fri, 9 Mar 2012 09:46:22 -0500" -->
<!-- isosent="20120309144622" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26118" -->
<!-- id="CAANzjEmRD7SggAUAQTcRgwWZ9PkOXAepFKdTfs4FbbM_9jeHXw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAANzjEkEt=7kTrttNPkf-=Yf7_m5RovLrhN-cB1SZuZh2VDGqQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26118<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-09 09:46:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10695.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Previous message:</strong> <a href="10693.php">George Bosilca: "Re: [OMPI devel] MCA BTL Fragment lists"</a>
<li><strong>In reply to:</strong> <a href="10689.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26118"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed in r26122. I tested locally with the ibm test suite, and it looks
<br>
good. MTT should highlight if there are any other issues - but I doubt
<br>
there will be.
<br>
<p>-- Josh
<br>
<p>On Thu, Mar 8, 2012 at 5:16 PM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Good point (I did not even look at ompi_comm_compare, I was using this for
</span><br>
<span class="quotelev1">&gt; something else). I'll take a pass at converting the ompi_comm_compare to
</span><br>
<span class="quotelev1">&gt; use the ompi_group_compare functionality - it is good code reuse.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Mar 8, 2012 at 4:08 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Josh,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI already have a similar function in the communicator part,
</span><br>
<span class="quotelev2">&gt;&gt; function that is not exposed to the upper layer. I think that using the
</span><br>
<span class="quotelev2">&gt;&gt; code in ompi_comm_compare (the second part that compare groups) is sound
</span><br>
<span class="quotelev2">&gt;&gt; proof. Moreover, if now we have an ompi_group_compare function you should
</span><br>
<span class="quotelev2">&gt;&gt; use it in the ompi_comm_compare to ease the readability of the code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Regards,
</span><br>
<span class="quotelev2">&gt;&gt;    george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 8, 2012, at 16:57 , jjhursey_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Author: jjhursey
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Date: 2012-03-08 16:57:45 EST (Thu, 08 Mar 2012)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; New Revision: 26118
</span><br>
<span class="quotelev3">&gt;&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/26118">https://svn.open-mpi.org/trac/ompi/changeset/26118</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Abstract MPI_Group_compare to an OMPI function for internal use (point
</span><br>
<span class="quotelev2">&gt;&gt; the MPI interface to the internal function).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
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
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10694/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10695.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Previous message:</strong> <a href="10693.php">George Bosilca: "Re: [OMPI devel] MCA BTL Fragment lists"</a>
<li><strong>In reply to:</strong> <a href="10689.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26118"</a>
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
