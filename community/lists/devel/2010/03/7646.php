<?
$subject_val = "Re: [OMPI devel] Location of binaries";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 22 11:18:32 2010" -->
<!-- isoreceived="20100322151832" -->
<!-- sent="Mon, 22 Mar 2010 11:18:27 -0400" -->
<!-- isosent="20100322151827" -->
<!-- name="herbey zepeda" -->
<!-- email="zepedaherbey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Location of binaries" -->
<!-- id="49856ef1003220818v432d30a6tef27b8a83068b3a3_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="f6ed2721003220806k5ea904caoac6a79ad70d81568_at_mail.gmail.com" -->
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
<strong>From:</strong> herbey zepeda (<em>zepedaherbey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-22 11:18:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7647.php">Timur Magomedov: "Re: [OMPI devel] Location of binaries"</a>
<li><strong>Previous message:</strong> <a href="7645.php">Timothy Hayes: "Re: [OMPI devel] Location of binaries"</a>
<li><strong>In reply to:</strong> <a href="7645.php">Timothy Hayes: "Re: [OMPI devel] Location of binaries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7647.php">Timur Magomedov: "Re: [OMPI devel] Location of binaries"</a>
<li><strong>Reply:</strong> <a href="7647.php">Timur Magomedov: "Re: [OMPI devel] Location of binaries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes Tim it's along these lines,
<br>
I see, so if I understand correctly we have two options:
<br>
<p>1-Using a network file system (it will be the file system's responsibility
<br>
to export P binaries from C to A and B)
<br>
<p>2-manually copy the binaries to the machines that will be executing the
<br>
program P (in this case machine A and machine B)
<br>
<p><p>Since in my case I will not use a distributed file system I will have to go
<br>
for option 2.
<br>
I will have to write a script that updates machines A and B each time P is
<br>
modified.
<br>
<p>So just to clarify, what you mean is that the P binaries HAVE to reside in
<br>
machines A and B prior to execution of P from machine C?
<br>
<p>thank you
<br>
herbey
<br>
<p><p><p><p>On Mon, Mar 22, 2010 at 11:06 AM, Timothy Hayes &lt;hayesti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; If I understood your question correctly, it's not really the MPI
</span><br>
<span class="quotelev1">&gt; implementation's duty to solve this issue. You either have to copy the
</span><br>
<span class="quotelev1">&gt; binaries to each machine manually or (more usually) each machine is given
</span><br>
<span class="quotelev1">&gt; access to a common shared file system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   On 22 March 2010 15:42, herbey zepeda &lt;zepedaherbey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In open MPI, where are the binaries stored.
</span><br>
<span class="quotelev2">&gt;&gt; Let's say I have a program P that adds the numbers in an array of length
</span><br>
<span class="quotelev2">&gt;&gt; 10
</span><br>
<span class="quotelev2">&gt;&gt; I want to distribute the execution between 2 computers A and B
</span><br>
<span class="quotelev2">&gt;&gt; A adds from array[0] to array[4]
</span><br>
<span class="quotelev2">&gt;&gt; B adds from array[5] to array[9]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I understand that I have to tell mpi that machines A and B exist and that
</span><br>
<span class="quotelev2">&gt;&gt; I want the processes to be exected as required.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No problem with this, my confusion is in the implementation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; lets say I am running the adding program P from machine C.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I execute the P program, how do computers A and B know what binary to
</span><br>
<span class="quotelev2">&gt;&gt; execute? My binaries are in copmuter C!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does MPI copy the binaries to machines A and B from C? and then executes
</span><br>
<span class="quotelev2">&gt;&gt; the program?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How is the program P loaded to memory in A and B, is P stored on disk in A
</span><br>
<span class="quotelev2">&gt;&gt; and B?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do I have to copy the P binaries in A and B prior to executing the
</span><br>
<span class="quotelev2">&gt;&gt; program?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When the program P has finished execution , what happens to the binaries.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have not found anything on the web to answer my question
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7646/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7647.php">Timur Magomedov: "Re: [OMPI devel] Location of binaries"</a>
<li><strong>Previous message:</strong> <a href="7645.php">Timothy Hayes: "Re: [OMPI devel] Location of binaries"</a>
<li><strong>In reply to:</strong> <a href="7645.php">Timothy Hayes: "Re: [OMPI devel] Location of binaries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7647.php">Timur Magomedov: "Re: [OMPI devel] Location of binaries"</a>
<li><strong>Reply:</strong> <a href="7647.php">Timur Magomedov: "Re: [OMPI devel] Location of binaries"</a>
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
