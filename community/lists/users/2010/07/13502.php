<?
$subject_val = "[OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 11:42:18 2010" -->
<!-- isoreceived="20100707154218" -->
<!-- sent="Wed, 7 Jul 2010 09:42:14 -0600" -->
<!-- isosent="20100707154214" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated" -->
<!-- id="SNT134-w3114382F34F3DC45A91757CBB30_at_phx.gbl" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated<br>
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-07 11:42:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13503.php">Grzegorz Maj: "Re: [OMPI users] MPI_Init failing in singleton"</a>
<li><strong>Previous message:</strong> <a href="13501.php">Gabriele Fatigati: "Re: [OMPI users] Dynamic algorithms problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13525.php">David Zhang: "Re: [OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated"</a>
<li><strong>Reply:</strong> <a href="13525.php">David Zhang: "Re: [OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All:
<br>
I need to transfer some messages from workers master node on MPI cluster with Open MPI.
<br>
The number of messages is fixed. 
<br>
When I increase the number of worker nodes, i got error: 
<br>
------------------------------------------
<br>
terminate called after throwing an instance of 'boost::exception_detail::clone_impl&lt;boost::exception_detail::error_info_injector&lt;boost::mpi::exception&gt; &gt;'  what():  MPI_Unpack: MPI_ERR_TRUNCATE: message truncated[n231:45873] *** Process received signal ***[n231:45873] Signal: Aborted (6)[n231:45873] Signal code:  (-6)[n231:45873] [ 0] /lib64/libpthread.so.0 [0x3c50e0e4c0][n231:45873] [ 1] /lib64/libc.so.6(gsignal+0x35) [0x3c50230215][n231:45873] [ 2] /lib64/libc.so.6(abort+0x110) [0x3c50231cc0]
<br>
<p>--------------------------------------------------------------
<br>
For 40 workers , it works well. 
<br>
But for 50 workers, it got this error. 
<br>
The largest message size is not more then 72 bytes. 
<br>
Any help is appreciated. 
<br>
thanks
<br>
Jack
<br>
July 7 2010 		 	   		  
<br>
_________________________________________________________________
<br>
The New Busy is not the too busy. Combine all your e-mail accounts with Hotmail.
<br>
<a href="http://www.windowslive.com/campaign/thenewbusy?tile=multiaccount&amp;ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_4">http://www.windowslive.com/campaign/thenewbusy?tile=multiaccount&amp;ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_4</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13502/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13503.php">Grzegorz Maj: "Re: [OMPI users] MPI_Init failing in singleton"</a>
<li><strong>Previous message:</strong> <a href="13501.php">Gabriele Fatigati: "Re: [OMPI users] Dynamic algorithms problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13525.php">David Zhang: "Re: [OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated"</a>
<li><strong>Reply:</strong> <a href="13525.php">David Zhang: "Re: [OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated"</a>
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
