<?
$subject_val = "[OMPI users] OpenMPI error MPI_ERR_TRUNCATE";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  2 13:25:20 2010" -->
<!-- isoreceived="20100702172520" -->
<!-- sent="Fri, 2 Jul 2010 11:25:15 -0600" -->
<!-- isosent="20100702172515" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI error MPI_ERR_TRUNCATE" -->
<!-- id="SNT134-w23DC1A633FB145DAFE4EE5CBCE0_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI error MPI_ERR_TRUNCATE<br>
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-02 13:25:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13467.php">Lisandro Dalcin: "Re: [OMPI users] Unable to include mpich library"</a>
<li><strong>Previous message:</strong> <a href="13465.php">Jeff Squyres: "Re: [OMPI users] is OpenMPI 1.4 thread-safe?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All:
<br>
With boost MPI, I trying to ask some worker nodes to send some message to the single master node. I am using OpenMPI 1.3.4.
<br>
I use an array recvArray[row][column] to receive the message, which is a C++ class that contain int, member functions. But I got an error of 
<br>
terminate called after throwing an instance of 'boost::exception_detail::clone_impl&lt;boost::exception_detail::error_info_injector&lt;boost::mpi::exception&gt; &gt;'  what():  MPI_Test: MPI_ERR_TRUNCATE: message truncated[n124:126639] *** Process received signal ***[n124:126639] Signal: Aborted (6)[n124:126639] Signal code:  (-6)
<br>
It seems that the master cannot find enough space for the receicved message. 
<br>
But, I have decleared the recvArray&lt;calssPackage&gt; , which is a vector with element as my received class package. 
<br>
The error is very wierd.
<br>
When I open the recvied package, the elements are not expected numbers buy only some very large or small numbers.
<br>
Any help is appreciated. 
<br>
Jack 
<br>
July 2  2010
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
_________________________________________________________________
<br>
The New Busy think 9 to 5 is a cute idea. Combine multiple calendars with Hotmail. 
<br>
<a href="http://www.windowslive.com/campaign/thenewbusy?tile=multicalendar&amp;ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_5">http://www.windowslive.com/campaign/thenewbusy?tile=multicalendar&amp;ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_5</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13466/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13467.php">Lisandro Dalcin: "Re: [OMPI users] Unable to include mpich library"</a>
<li><strong>Previous message:</strong> <a href="13465.php">Jeff Squyres: "Re: [OMPI users] is OpenMPI 1.4 thread-safe?"</a>
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
