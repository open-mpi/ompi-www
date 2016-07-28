<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov  7 18:35:24 2005" -->
<!-- isoreceived="20051107233524" -->
<!-- sent="Mon, 7 Nov 2005 18:30:09 -0500" -->
<!-- isosent="20051107233009" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Last changes on the datatype" -->
<!-- id="A56047E7-B14C-461E-AE90-2F87A66BB057_at_cs.utk.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-07 18:30:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0519.php">Jeff Squyres: "Open MPI @SC2005"</a>
<li><strong>Previous message:</strong> <a href="0517.php">Graham E Fagg: "Re:  MPI_REPLACE: opinion?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Finally, the new latest changes on the data-type engine get  
<br>
committed. It took a lot longer than expected but everything is now a  
<br>
lot easier to understand (ok this sentence is very relative), smaller  
<br>
in number of functions and a lot faster. The idea was to make the  
<br>
pack/unpack for sparse data-types as fast as possible but as a side  
<br>
effect the convertor management get slim-fasted (Netpipe on SM show  
<br>
improvements for all sizes in order of 2-5%).
<br>
<p>I'll continue testing it but please help me. If you do not plan to  
<br>
make performance tests then compile in debug mode as in this mode the  
<br>
data-type protection mechanism will print a lot of information if it  
<br>
detect that something bad happens (like writing outside the user  
<br>
space buffer ...). If suddenly your program start dumping a lot of  
<br>
text please copy it in the email where you report the bug, and it  
<br>
will make the debugging process a lot faster for me.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0519.php">Jeff Squyres: "Open MPI @SC2005"</a>
<li><strong>Previous message:</strong> <a href="0517.php">Graham E Fagg: "Re:  MPI_REPLACE: opinion?"</a>
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
