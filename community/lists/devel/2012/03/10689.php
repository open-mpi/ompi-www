<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26118";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  8 17:16:12 2012" -->
<!-- isoreceived="20120308221612" -->
<!-- sent="Thu, 8 Mar 2012 16:16:08 -0600" -->
<!-- isosent="20120308221608" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26118" -->
<!-- id="CAANzjEkEt=7kTrttNPkf-=Yf7_m5RovLrhN-cB1SZuZh2VDGqQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="94B4712C-C869-4E9E-840D-7127C7F1E92E_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2012-03-08 17:16:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10690.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26119"</a>
<li><strong>Previous message:</strong> <a href="10688.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26118"</a>
<li><strong>In reply to:</strong> <a href="10688.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26118"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10694.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26118"</a>
<li><strong>Reply:</strong> <a href="10694.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26118"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good point (I did not even look at ompi_comm_compare, I was using this for
<br>
something else). I'll take a pass at converting the ompi_comm_compare to
<br>
use the ompi_group_compare functionality - it is good code reuse.
<br>
<p>Thanks,
<br>
Josh
<br>
<p>On Thu, Mar 8, 2012 at 4:08 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Josh,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI already have a similar function in the communicator part,
</span><br>
<span class="quotelev1">&gt; function that is not exposed to the upper layer. I think that using the
</span><br>
<span class="quotelev1">&gt; code in ompi_comm_compare (the second part that compare groups) is sound
</span><br>
<span class="quotelev1">&gt; proof. Moreover, if now we have an ompi_group_compare function you should
</span><br>
<span class="quotelev1">&gt; use it in the ompi_comm_compare to ease the readability of the code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Regards,
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 8, 2012, at 16:57 , jjhursey_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Author: jjhursey
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2012-03-08 16:57:45 EST (Thu, 08 Mar 2012)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 26118
</span><br>
<span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/26118">https://svn.open-mpi.org/trac/ompi/changeset/26118</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; Abstract MPI_Group_compare to an OMPI function for internal use (point
</span><br>
<span class="quotelev1">&gt; the MPI interface to the internal function).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10689/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10690.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26119"</a>
<li><strong>Previous message:</strong> <a href="10688.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26118"</a>
<li><strong>In reply to:</strong> <a href="10688.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26118"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10694.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26118"</a>
<li><strong>Reply:</strong> <a href="10694.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26118"</a>
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
