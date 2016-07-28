<?
$subject_val = "Re: [OMPI devel] About Marshalling and Umarshalling";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  5 10:13:28 2012" -->
<!-- isoreceived="20121105151328" -->
<!-- sent="Mon, 5 Nov 2012 07:13:20 -0800" -->
<!-- isosent="20121105151320" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] About Marshalling and Umarshalling" -->
<!-- id="0BD4FE2F-A533-4ADE-9506-CBF5A9322345_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="E6D5D6AF68E4194BAC1905E29435983190C73CA7_at_365EXCH-MBX-P3.nbttech.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] About Marshalling and Umarshalling<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-05 10:13:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11750.php">Jeff Squyres: "Re: [OMPI devel] About Marshalling and Umarshalling"</a>
<li><strong>Previous message:</strong> <a href="11748.php">Santhosh Kokala: "Re: [OMPI devel] About Marshalling and Umarshalling"</a>
<li><strong>In reply to:</strong> <a href="11748.php">Santhosh Kokala: "Re: [OMPI devel] About Marshalling and Umarshalling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11750.php">Jeff Squyres: "Re: [OMPI devel] About Marshalling and Umarshalling"</a>
<li><strong>Reply:</strong> <a href="11750.php">Jeff Squyres: "Re: [OMPI devel] About Marshalling and Umarshalling"</a>
<li><strong>Reply:</strong> <a href="11751.php">N.M. Maclaren: "Re: [OMPI devel] About Marshalling and Umarshalling"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We adhere to the MPI standard, so we expect the user in such an instance to define a datatype that reflects the structure they are trying to send. We will then do the voodoo to correctly send that data in a heterogeneous environment, and pass the data back (in the defined datatype) to the user on the remote end. They can then put the various items back into their structure.
<br>
<p>I'm not sure what you mean by an &quot;ideal style language&quot;. See the MPI standard or our doc page, for example
<br>
<p><a href="http://www.open-mpi.org/doc/v1.6/man3/MPI_Type_create_struct.3.php">http://www.open-mpi.org/doc/v1.6/man3/MPI_Type_create_struct.3.php</a>
<br>
<p>for an explanation of how one defines a datatype.
<br>
<p><p>On Nov 4, 2012, at 8:14 PM, Santhosh Kokala &lt;Santhosh.Kokala_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Now I get it.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Marshalling &#150; the process of taking a collection of data items
</span><br>
<span class="quotelev1">&gt; and assembling them into a form suitable for transmission in 
</span><br>
<span class="quotelev1">&gt; a message
</span><br>
<span class="quotelev1">&gt; Unmarshalling &#150; is the process of disassembling them on 
</span><br>
<span class="quotelev1">&gt; arrival into an equivalent representation at the destination
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Santhosh
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of Paul Hargrove
</span><br>
<span class="quotelev1">&gt; Sent: Sunday, November 04, 2012 8:10 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] About Marshalling and Umarshalling
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Santhosh,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I think Ralph wants you to give your definitions for &quot;Marshlling&quot; and &quot;Unmashalling&quot;.
</span><br>
<span class="quotelev1">&gt; Otherwise, it is not clear to him or others exactly what you are asking, because there are multiple possible meanings for those terms.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sun, Nov 4, 2012 at 7:56 PM, Santhosh Kokala &lt;Santhosh.Kokala_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I wanted to know how does OpenMPI achieve marshaling and unmarshalling? If not how does it communicate with various hosts with various architectures?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Sunday, November 04, 2012 7:46 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] About Marshalling and Umarshalling
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Could you provide a little more definition of your terms? Just want to ensure we are talking the same language as I don't immediately see the relationship between these three questions.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Nov 4, 2012, at 6:19 PM, Santhosh Kokala &lt;Santhosh.Kokala_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt; Does OpenMPI support Marshalling/Unmarshalling?  If so does it use ideal style language? If not how does it support heterogenous hosts?
</span><br>
<span class="quotelev1">&gt; Santhosh
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11749/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11750.php">Jeff Squyres: "Re: [OMPI devel] About Marshalling and Umarshalling"</a>
<li><strong>Previous message:</strong> <a href="11748.php">Santhosh Kokala: "Re: [OMPI devel] About Marshalling and Umarshalling"</a>
<li><strong>In reply to:</strong> <a href="11748.php">Santhosh Kokala: "Re: [OMPI devel] About Marshalling and Umarshalling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11750.php">Jeff Squyres: "Re: [OMPI devel] About Marshalling and Umarshalling"</a>
<li><strong>Reply:</strong> <a href="11750.php">Jeff Squyres: "Re: [OMPI devel] About Marshalling and Umarshalling"</a>
<li><strong>Reply:</strong> <a href="11751.php">N.M. Maclaren: "Re: [OMPI devel] About Marshalling and Umarshalling"</a>
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
