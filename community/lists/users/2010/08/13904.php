<?
$subject_val = "Re: [OMPI users] Open MPI C++ class datatype";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  4 03:53:16 2010" -->
<!-- isoreceived="20100804075316" -->
<!-- sent="Wed, 4 Aug 2010 09:53:10 +0200" -->
<!-- isosent="20100804075310" -->
<!-- name="Riccardo Murri" -->
<!-- email="riccardo.murri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI C++ class datatype" -->
<!-- id="AANLkTinvWBhABMEtveKk4yxJxh0eMnKv9tx+0x6VXhuk_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="SNT134-w630255D9AF562100018ADECBAF0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI C++ class datatype<br>
<strong>From:</strong> Riccardo Murri (<em>riccardo.murri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-04 03:53:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13905.php">Tad Lake: "[OMPI users] execuation time is not stable with 2 processes"</a>
<li><strong>Previous message:</strong> <a href="13903.php">Jack Bryan: "[OMPI users] Open MPI C++ class datatype"</a>
<li><strong>In reply to:</strong> <a href="13903.php">Jack Bryan: "[OMPI users] Open MPI C++ class datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13908.php">Cristobal Navarro: "Re: [OMPI users] Open MPI C++ class datatype"</a>
<li><strong>Reply:</strong> <a href="13908.php">Cristobal Navarro: "Re: [OMPI users] Open MPI C++ class datatype"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jack,
<br>
<p>On Wed, Aug 4, 2010 at 6:25 AM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I need to transfer some data, which is C++ class with some vector&lt;float&gt;
</span><br>
<span class="quotelev1">&gt; member data.
</span><br>
<span class="quotelev1">&gt; I want to use MPI_Bcast(buffer, count, datatype, root, comm);
</span><br>
<span class="quotelev1">&gt; May I use MPI_Datatype to define&#194;&#160;customized data structure that contain C++
</span><br>
<span class="quotelev1">&gt; class ?
</span><br>
<p>No, unless you have access to the implementation details of the
<br>
std::vector class (which would render your code dependent on one
<br>
particular implementation of the STL, and thus non-portable).
<br>
<p>Boost.MPI provides support for std C++ datatypes; if you want to keep
<br>
to &quot;plain MPI&quot; calls, then your only choice is to use C-style arrays.
<br>
<p>Regards,
<br>
Riccardo
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13905.php">Tad Lake: "[OMPI users] execuation time is not stable with 2 processes"</a>
<li><strong>Previous message:</strong> <a href="13903.php">Jack Bryan: "[OMPI users] Open MPI C++ class datatype"</a>
<li><strong>In reply to:</strong> <a href="13903.php">Jack Bryan: "[OMPI users] Open MPI C++ class datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13908.php">Cristobal Navarro: "Re: [OMPI users] Open MPI C++ class datatype"</a>
<li><strong>Reply:</strong> <a href="13908.php">Cristobal Navarro: "Re: [OMPI users] Open MPI C++ class datatype"</a>
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
