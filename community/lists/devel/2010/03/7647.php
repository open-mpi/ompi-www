<?
$subject_val = "Re: [OMPI devel] Location of binaries";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 22 11:42:32 2010" -->
<!-- isoreceived="20100322154232" -->
<!-- sent="Mon, 22 Mar 2010 18:42:23 +0300" -->
<!-- isosent="20100322154223" -->
<!-- name="Timur Magomedov" -->
<!-- email="timur.magomedov_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Location of binaries" -->
<!-- id="1269272543.2472.4.camel_at_magomedov-desktop" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="49856ef1003220818v432d30a6tef27b8a83068b3a3_at_mail.gmail.com" -->
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
<strong>From:</strong> Timur Magomedov (<em>timur.magomedov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-22 11:42:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7648.php">George Bosilca: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<li><strong>Previous message:</strong> <a href="7646.php">herbey zepeda: "Re: [OMPI devel] Location of binaries"</a>
<li><strong>In reply to:</strong> <a href="7646.php">herbey zepeda: "Re: [OMPI devel] Location of binaries"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>There are --preload-binary and --preload-files mpirun options mentioned
<br>
in man page which do the same as the script that you're going to write.
<br>
<p>&#208;&#146; &#208;&#159;&#208;&#189;&#208;&#180;, 22/03/2010 &#208;&#178; 11:18 -0400, herbey zepeda &#208;&#191;&#208;&#184;&#209;&#136;&#208;&#181;&#209;&#130;:
<br>
<span class="quotelev1">&gt; Yes Tim it's along these lines, 
</span><br>
<span class="quotelev1">&gt; I see, so if I understand correctly we have two options:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 1-Using a network file system (it will be the file system's
</span><br>
<span class="quotelev1">&gt; responsibility to export P binaries from C to A and B)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 2-manually copy the binaries to the machines that will be executing
</span><br>
<span class="quotelev1">&gt; the program P (in this case machine A and machine B)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since in my case I will not use a distributed file system I will have
</span><br>
<span class="quotelev1">&gt; to go for option 2.
</span><br>
<span class="quotelev1">&gt; I will have to write a script that updates machines A and B each time
</span><br>
<span class="quotelev1">&gt; P is modified.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; So just to clarify, what you mean is that the P binaries HAVE to
</span><br>
<span class="quotelev1">&gt; reside in machines A and B prior to execution of P from machine C?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; thank you 
</span><br>
<span class="quotelev1">&gt; herbey
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Mon, Mar 22, 2010 at 11:06 AM, Timothy Hayes &lt;hayesti_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;         If I understood your question correctly, it's not really the
</span><br>
<span class="quotelev1">&gt;         MPI implementation's duty to solve this issue. You either have
</span><br>
<span class="quotelev1">&gt;         to copy the binaries to each machine manually or (more
</span><br>
<span class="quotelev1">&gt;         usually) each machine is given access to a common shared file
</span><br>
<span class="quotelev1">&gt;         system.
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         Tim
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         On 22 March 2010 15:42, herbey zepeda &lt;zepedaherbey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         wrote:
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 Hi,
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt;                 In open MPI, where are the binaries stored. 
</span><br>
<span class="quotelev1">&gt;                 Let's say I have a program P that adds the numbers in
</span><br>
<span class="quotelev1">&gt;                 an array of length 10
</span><br>
<span class="quotelev1">&gt;                 I want to distribute the execution between 2 computers
</span><br>
<span class="quotelev1">&gt;                 A and B
</span><br>
<span class="quotelev1">&gt;                 A adds from array[0] to array[4]
</span><br>
<span class="quotelev1">&gt;                 B adds from array[5] to array[9]
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt;                 I understand that I have to tell mpi that machines A
</span><br>
<span class="quotelev1">&gt;                 and B exist and that I want the processes to be
</span><br>
<span class="quotelev1">&gt;                 exected as required.
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt;                 No problem with this, my confusion is in the
</span><br>
<span class="quotelev1">&gt;                 implementation.
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt;                 lets say I am running the adding program P from
</span><br>
<span class="quotelev1">&gt;                 machine C.
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt;                 When I execute the P program, how do computers A and B
</span><br>
<span class="quotelev1">&gt;                 know what binary to execute? My binaries are in
</span><br>
<span class="quotelev1">&gt;                 copmuter C!
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt;                 Does MPI copy the binaries to machines A and B from C?
</span><br>
<span class="quotelev1">&gt;                 and then executes the program?
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt;                 How is the program P loaded to memory in A and B, is P
</span><br>
<span class="quotelev1">&gt;                 stored on disk in A and B?
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt;                 Do I have to copy the P binaries in A and B prior to
</span><br>
<span class="quotelev1">&gt;                 executing the program?
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt;                 When the program P has finished execution , what
</span><br>
<span class="quotelev1">&gt;                 happens to the binaries.
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt;                 I have not found anything on the web to answer my
</span><br>
<span class="quotelev1">&gt;                 question
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt;                 Thank you
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 _______________________________________________
</span><br>
<span class="quotelev1">&gt;                 devel mailing list
</span><br>
<span class="quotelev1">&gt;                 devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;                 <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         devel mailing list
</span><br>
<span class="quotelev1">&gt;         devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><pre>
-- 
Kind regards,
Timur Magomedov
Senior C++ Developer
DevelopOnBox LLC / Zodiac Interactive
<a href="http://www.zodiac.tv/">http://www.zodiac.tv/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7648.php">George Bosilca: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<li><strong>Previous message:</strong> <a href="7646.php">herbey zepeda: "Re: [OMPI devel] Location of binaries"</a>
<li><strong>In reply to:</strong> <a href="7646.php">herbey zepeda: "Re: [OMPI devel] Location of binaries"</a>
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
