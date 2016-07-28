<?
$subject_val = "Re: [OMPI devel] Location of binaries";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 22 11:06:34 2010" -->
<!-- isoreceived="20100322150634" -->
<!-- sent="Mon, 22 Mar 2010 16:06:29 +0100" -->
<!-- isosent="20100322150629" -->
<!-- name="Timothy Hayes" -->
<!-- email="hayesti_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Location of binaries" -->
<!-- id="f6ed2721003220806k5ea904caoac6a79ad70d81568_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49856ef1003220742v2abe66b9m87f5003fba1804b2_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Location of binaries<br>
<strong>From:</strong> Timothy Hayes (<em>hayesti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-22 11:06:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7646.php">herbey zepeda: "Re: [OMPI devel] Location of binaries"</a>
<li><strong>Previous message:</strong> <a href="7644.php">herbey zepeda: "[OMPI devel] Location of binaries"</a>
<li><strong>In reply to:</strong> <a href="7644.php">herbey zepeda: "[OMPI devel] Location of binaries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7646.php">herbey zepeda: "Re: [OMPI devel] Location of binaries"</a>
<li><strong>Reply:</strong> <a href="7646.php">herbey zepeda: "Re: [OMPI devel] Location of binaries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If I understood your question correctly, it's not really the MPI
<br>
implementation's duty to solve this issue. You either have to copy the
<br>
binaries to each machine manually or (more usually) each machine is given
<br>
access to a common shared file system.
<br>
<p>Tim
<br>
<p>On 22 March 2010 15:42, herbey zepeda &lt;zepedaherbey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In open MPI, where are the binaries stored.
</span><br>
<span class="quotelev1">&gt; Let's say I have a program P that adds the numbers in an array of length 10
</span><br>
<span class="quotelev1">&gt; I want to distribute the execution between 2 computers A and B
</span><br>
<span class="quotelev1">&gt; A adds from array[0] to array[4]
</span><br>
<span class="quotelev1">&gt; B adds from array[5] to array[9]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I understand that I have to tell mpi that machines A and B exist and that I
</span><br>
<span class="quotelev1">&gt; want the processes to be exected as required.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No problem with this, my confusion is in the implementation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lets say I am running the adding program P from machine C.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I execute the P program, how do computers A and B know what binary to
</span><br>
<span class="quotelev1">&gt; execute? My binaries are in copmuter C!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does MPI copy the binaries to machines A and B from C? and then executes
</span><br>
<span class="quotelev1">&gt; the program?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How is the program P loaded to memory in A and B, is P stored on disk in A
</span><br>
<span class="quotelev1">&gt; and B?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do I have to copy the P binaries in A and B prior to executing the program?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When the program P has finished execution , what happens to the binaries.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have not found anything on the web to answer my question
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you
</span><br>
<span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7645/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7646.php">herbey zepeda: "Re: [OMPI devel] Location of binaries"</a>
<li><strong>Previous message:</strong> <a href="7644.php">herbey zepeda: "[OMPI devel] Location of binaries"</a>
<li><strong>In reply to:</strong> <a href="7644.php">herbey zepeda: "[OMPI devel] Location of binaries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7646.php">herbey zepeda: "Re: [OMPI devel] Location of binaries"</a>
<li><strong>Reply:</strong> <a href="7646.php">herbey zepeda: "Re: [OMPI devel] Location of binaries"</a>
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
