<?
$subject_val = "[OMPI devel] Failure calling MPI_Type_set_attr(datatype, keyval, NULL)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 08:26:56 2016" -->
<!-- isoreceived="20160211132656" -->
<!-- sent="Thu, 11 Feb 2016 16:26:35 +0300" -->
<!-- isosent="20160211132635" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] Failure calling MPI_Type_set_attr(datatype, keyval, NULL)" -->
<!-- id="CAEcYPwAAxC08VsWOKx0_+AXgHfFg-ejjo--xx1+FbM3BH2Zthw_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Failure calling MPI_Type_set_attr(datatype, keyval, NULL)<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-11 08:26:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18586.php">Howard Pritchard: "[OMPI devel] MTT error?"</a>
<li><strong>Previous message:</strong> <a href="18584.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPI_Get_address() with MPI_BOTTOM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18597.php">George Bosilca: "Re: [OMPI devel] Failure calling MPI_Type_set_attr(datatype, keyval, NULL)"</a>
<li><strong>Reply:</strong> <a href="18597.php">George Bosilca: "Re: [OMPI devel] Failure calling MPI_Type_set_attr(datatype, keyval, NULL)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Despite working for communicators and windows, setting a NULL
<br>
attribute value in datatypes fails with MPI_ERR_ARG. Run the attached
<br>
test case to reproduce.
<br>
<p><p><pre>
-- 
Lisandro Dalcin
============
Research Scientist
Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
Numerical Porous Media Center (NumPor)
King Abdullah University of Science and Technology (KAUST)
<a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
4700 King Abdullah University of Science and Technology
al-Khawarizmi Bldg (Bldg 1), Office # 4332
Thuwal 23955-6900, Kingdom of Saudi Arabia
<a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
Office Phone: +966 12 808-0459

</pre>
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18585/set_attr_null.c">set_attr_null.c</a>
</ul>
<!-- attachment="set_attr_null.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18586.php">Howard Pritchard: "[OMPI devel] MTT error?"</a>
<li><strong>Previous message:</strong> <a href="18584.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPI_Get_address() with MPI_BOTTOM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18597.php">George Bosilca: "Re: [OMPI devel] Failure calling MPI_Type_set_attr(datatype, keyval, NULL)"</a>
<li><strong>Reply:</strong> <a href="18597.php">George Bosilca: "Re: [OMPI devel] Failure calling MPI_Type_set_attr(datatype, keyval, NULL)"</a>
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
