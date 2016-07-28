<?
$subject_val = "[OMPI devel] memchecker and weak symbols";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 14 19:37:11 2008" -->
<!-- isoreceived="20080215003711" -->
<!-- sent="Thu, 14 Feb 2008 19:37:01 -0500" -->
<!-- isosent="20080215003701" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] memchecker and weak symbols" -->
<!-- id="3788A6AD-7065-48B9-B9D8-7F8AC7DBE800_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> [OMPI devel] memchecker and weak symbols<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-14 19:37:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3252.php">Shiqing Fan: "Re: [OMPI devel] memchecker and weak symbols"</a>
<li><strong>Previous message:</strong> <a href="3250.php">George Bosilca: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3252.php">Shiqing Fan: "Re: [OMPI devel] memchecker and weak symbols"</a>
<li><strong>Reply:</strong> <a href="3252.php">Shiqing Fan: "Re: [OMPI devel] memchecker and weak symbols"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It turned out that memchecker break our usage of weak symbols. The  
<br>
problem is that the definition of the weak symbol should always appear  
<br>
before the first use of the function. There are two MPI functions that  
<br>
are used in the memchecker.h file: MPI_Type_get_contents and  
<br>
MPI_Type_get_envelope. The memchecker.h header get included before we  
<br>
get a chance to define the #pragma weak, and the symbols are  
<br>
incorrectly marked in the resulting object file.
<br>
<p>Additionally, I remember that we decided not to use any MPI level  
<br>
functions inside the Open MPI library. I guess the correct way of  
<br>
doing this is to use directly the functions provided by the datatype  
<br>
engine ompi_ddt_get_args once with which set to zero (to retrieve the  
<br>
values i.e. similar to MPI_Type_get_envelope) and once with &quot;which&quot;  
<br>
set to one (to retrieve the content i.e. similar to  
<br>
MPI_Type_get_content).
<br>
<p>Moreover, there is a better way to have the memchecker_call function  
<br>
implemented by taking advantage of the data-type engine. It will make  
<br>
memchecker really dependent of Open MPI ... but I guess not more than  
<br>
it is right now :) Ping me if you are interested in exploring this  
<br>
option.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3251/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3252.php">Shiqing Fan: "Re: [OMPI devel] memchecker and weak symbols"</a>
<li><strong>Previous message:</strong> <a href="3250.php">George Bosilca: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3252.php">Shiqing Fan: "Re: [OMPI devel] memchecker and weak symbols"</a>
<li><strong>Reply:</strong> <a href="3252.php">Shiqing Fan: "Re: [OMPI devel] memchecker and weak symbols"</a>
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
