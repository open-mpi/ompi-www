<?
$subject_val = "Re: [OMPI devel] memchecker and weak symbols";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 15 05:36:35 2008" -->
<!-- isoreceived="20080215103635" -->
<!-- sent="Fri, 15 Feb 2008 11:35:25 +0100" -->
<!-- isosent="20080215103525" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] memchecker and weak symbols" -->
<!-- id="47B56AED.1000608_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3788A6AD-7065-48B9-B9D8-7F8AC7DBE800_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] memchecker and weak symbols<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-15 05:35:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3253.php">Tim Prins: "Re: [OMPI devel] New address selection for btl-tcp (was Re: [OMPI svn]	svn:open-mpi r17307)"</a>
<li><strong>Previous message:</strong> <a href="3251.php">George Bosilca: "[OMPI devel] memchecker and weak symbols"</a>
<li><strong>In reply to:</strong> <a href="3251.php">George Bosilca: "[OMPI devel] memchecker and weak symbols"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; It turned out that memchecker break our usage of weak symbols. The 
</span><br>
<span class="quotelev1">&gt; problem is that the definition of the weak symbol should always appear 
</span><br>
<span class="quotelev1">&gt; before the first use of the function. There are two MPI functions that 
</span><br>
<span class="quotelev1">&gt; are used in the memchecker.h file: MPI_Type_get_contents and 
</span><br>
<span class="quotelev1">&gt; MPI_Type_get_envelope. The memchecker.h header get included before we 
</span><br>
<span class="quotelev1">&gt; get a chance to define the #pragma weak, and the symbols are 
</span><br>
<span class="quotelev1">&gt; incorrectly marked in the resulting object file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Additionally, I remember that we decided not to use any MPI level 
</span><br>
<span class="quotelev1">&gt; functions inside the Open MPI library. I guess the correct way of 
</span><br>
<span class="quotelev1">&gt; doing this is to use directly the functions provided by the datatype 
</span><br>
<span class="quotelev1">&gt; engine ompi_ddt_get_args once with which set to zero (to retrieve the 
</span><br>
<span class="quotelev1">&gt; values i.e. similar to MPI_Type_get_envelope) and once with &quot;which&quot; 
</span><br>
<span class="quotelev1">&gt; set to one (to retrieve the content i.e. similar to 
</span><br>
<span class="quotelev1">&gt; MPI_Type_get_content).
</span><br>
Yes, you are correct. This has been fixed with r17469. Thanks a lot. :-)
<br>
<p><span class="quotelev1">&gt; Moreover, there is a better way to have the memchecker_call function 
</span><br>
<span class="quotelev1">&gt; implemented by taking advantage of the data-type engine. It will make 
</span><br>
<span class="quotelev1">&gt; memchecker really dependent of Open MPI ... but I guess not more than 
</span><br>
<span class="quotelev1">&gt; it is right now :) Ping me if you are interested in exploring this 
</span><br>
<span class="quotelev1">&gt; option.
</span><br>
That sounds nice, I'm very interested, could you explain a little bit 
<br>
more in detail?
<br>
<p><p>Thanks,
<br>
Shiqing
<br>
<p><pre>
-- 
--------------------------------------------------------------
Shiqing Fan                     
<a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
High Performance Computing            Tel.: +49 711 685 87234
   Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
POSTAL:Nobelstrasse 19                email: fan_at_[hidden]     
ACTUAL:Allmandring 30
70569 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3253.php">Tim Prins: "Re: [OMPI devel] New address selection for btl-tcp (was Re: [OMPI svn]	svn:open-mpi r17307)"</a>
<li><strong>Previous message:</strong> <a href="3251.php">George Bosilca: "[OMPI devel] memchecker and weak symbols"</a>
<li><strong>In reply to:</strong> <a href="3251.php">George Bosilca: "[OMPI devel] memchecker and weak symbols"</a>
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
