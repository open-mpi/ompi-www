<?
$subject_val = "[OMPI devel] Location of binaries";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 22 10:43:04 2010" -->
<!-- isoreceived="20100322144304" -->
<!-- sent="Mon, 22 Mar 2010 10:42:59 -0400" -->
<!-- isosent="20100322144259" -->
<!-- name="herbey zepeda" -->
<!-- email="zepedaherbey_at_[hidden]" -->
<!-- subject="[OMPI devel] Location of binaries" -->
<!-- id="49856ef1003220742v2abe66b9m87f5003fba1804b2_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Location of binaries<br>
<strong>From:</strong> herbey zepeda (<em>zepedaherbey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-22 10:42:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7645.php">Timothy Hayes: "Re: [OMPI devel] Location of binaries"</a>
<li><strong>Previous message:</strong> <a href="7643.php">Matthias Jurenz: "Re: [OMPI devel] vt compilation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7645.php">Timothy Hayes: "Re: [OMPI devel] Location of binaries"</a>
<li><strong>Reply:</strong> <a href="7645.php">Timothy Hayes: "Re: [OMPI devel] Location of binaries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>In open MPI, where are the binaries stored.
<br>
Let's say I have a program P that adds the numbers in an array of length 10
<br>
I want to distribute the execution between 2 computers A and B
<br>
A adds from array[0] to array[4]
<br>
B adds from array[5] to array[9]
<br>
<p>I understand that I have to tell mpi that machines A and B exist and that I
<br>
want the processes to be exected as required.
<br>
<p>No problem with this, my confusion is in the implementation.
<br>
<p>lets say I am running the adding program P from machine C.
<br>
<p>When I execute the P program, how do computers A and B know what binary to
<br>
execute? My binaries are in copmuter C!
<br>
<p>Does MPI copy the binaries to machines A and B from C? and then executes the
<br>
program?
<br>
<p>How is the program P loaded to memory in A and B, is P stored on disk in A
<br>
and B?
<br>
<p>Do I have to copy the P binaries in A and B prior to executing the program?
<br>
<p>When the program P has finished execution , what happens to the binaries.
<br>
<p>I have not found anything on the web to answer my question
<br>
<p>Thank you
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7644/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7645.php">Timothy Hayes: "Re: [OMPI devel] Location of binaries"</a>
<li><strong>Previous message:</strong> <a href="7643.php">Matthias Jurenz: "Re: [OMPI devel] vt compilation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7645.php">Timothy Hayes: "Re: [OMPI devel] Location of binaries"</a>
<li><strong>Reply:</strong> <a href="7645.php">Timothy Hayes: "Re: [OMPI devel] Location of binaries"</a>
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
