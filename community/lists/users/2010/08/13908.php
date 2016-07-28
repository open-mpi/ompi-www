<?
$subject_val = "Re: [OMPI users] Open MPI C++ class datatype";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  4 10:13:34 2010" -->
<!-- isoreceived="20100804141334" -->
<!-- sent="Wed, 4 Aug 2010 10:13:06 -0400" -->
<!-- isosent="20100804141306" -->
<!-- name="Cristobal Navarro" -->
<!-- email="axischire_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI C++ class datatype" -->
<!-- id="AANLkTi=WKBUGd2Dmtn0Z7VkCJh+1R8aC9P_PQBZzk5Dj_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTinvWBhABMEtveKk4yxJxh0eMnKv9tx+0x6VXhuk_at_mail.gmail.com" -->
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
<strong>From:</strong> Cristobal Navarro (<em>axischire_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-04 10:13:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13909.php">Eugene Loh: "Re: [OMPI users] execuation time is not stable with 2 processes"</a>
<li><strong>Previous message:</strong> <a href="13907.php">Mark Potts: "Re: [OMPI users] execuation time is not stable with 2 processes"</a>
<li><strong>In reply to:</strong> <a href="13904.php">Riccardo Murri: "Re: [OMPI users] Open MPI C++ class datatype"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If your class has too many complex atributes,
<br>
&nbsp;it might be a good idea to send some sort of string or similar data
<br>
representing your class,
<br>
and then on the receiving node, you create the object based on that
<br>
information.
<br>
<p>works on some type of problems problems.
<br>
best regards.
<br>
Cristobal
<br>
<p>On Wed, Aug 4, 2010 at 3:53 AM, Riccardo Murri &lt;riccardo.murri_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jack,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Aug 4, 2010 at 6:25 AM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I need to transfer some data, which is C++ class with some vector&lt;float&gt;
</span><br>
<span class="quotelev2">&gt; &gt; member data.
</span><br>
<span class="quotelev2">&gt; &gt; I want to use MPI_Bcast(buffer, count, datatype, root, comm);
</span><br>
<span class="quotelev2">&gt; &gt; May I use MPI_Datatype to define customized data structure that contain
</span><br>
<span class="quotelev1">&gt; C++
</span><br>
<span class="quotelev2">&gt; &gt; class ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, unless you have access to the implementation details of the
</span><br>
<span class="quotelev1">&gt; std::vector class (which would render your code dependent on one
</span><br>
<span class="quotelev1">&gt; particular implementation of the STL, and thus non-portable).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Boost.MPI provides support for std C++ datatypes; if you want to keep
</span><br>
<span class="quotelev1">&gt; to &quot;plain MPI&quot; calls, then your only choice is to use C-style arrays.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Riccardo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13908/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13909.php">Eugene Loh: "Re: [OMPI users] execuation time is not stable with 2 processes"</a>
<li><strong>Previous message:</strong> <a href="13907.php">Mark Potts: "Re: [OMPI users] execuation time is not stable with 2 processes"</a>
<li><strong>In reply to:</strong> <a href="13904.php">Riccardo Murri: "Re: [OMPI users] Open MPI C++ class datatype"</a>
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
