<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Apr  7 02:59:49 2007" -->
<!-- isoreceived="20070407065949" -->
<!-- sent="Fri, 6 Apr 2007 23:59:34 -0700" -->
<!-- isosent="20070407065934" -->
<!-- name="Brian Powell" -->
<!-- email="powellb_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.2 on MacOSX Intel Fails" -->
<!-- id="9756FD4E-1C0B-4D97-B870-784B6D12F877_at_ucsc.edu" -->
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
<strong>From:</strong> Brian Powell (<em>powellb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-07 02:59:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3041.php">de Almeida, Valmor F.: "[OMPI users] mca_btl_tcp_frag_send: writev failed with errno=104"</a>
<li><strong>Previous message:</strong> <a href="3039.php">Brian W. Barrett: "Re: [OMPI users] Mixed Apple cluster OpenMPI build problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3042.php">de Almeida, Valmor F.: "Re: [OMPI users] OpenMPI 1.2 on MacOSX Intel Fails"</a>
<li><strong>Reply:</strong> <a href="3042.php">de Almeida, Valmor F.: "Re: [OMPI users] OpenMPI 1.2 on MacOSX Intel Fails"</a>
<li><strong>Reply:</strong> <a href="3045.php">Brian Barrett: "Re: [OMPI users] OpenMPI 1.2 on MacOSX Intel Fails"</a>
<li><strong>Maybe reply:</strong> <a href="3046.php">Brian Powell: "Re: [OMPI users] OpenMPI 1.2 on MacOSX Intel Fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings,
<br>
<p>I turn to the assistance of the OpenMPI wizards. I have compiled v1.2  
<br>
using gcc and ifort (see the attached config.log) with a variety of  
<br>
options. The compilation finishes (side note: I had to define NM  
<br>
otherwise the configure script failed) and installs. I try to run  
<br>
ompi_info and get the following:
<br>
<p>------------------------------------------------------------------------ 
<br>
<pre>
--
A library call unexpectedly failed.  This is a terminal error; please
show this message to an Open MPI wizard:
         Library call: mca_base_open
          Source file: ompi_info.cc
   Source line number: 139
Aborting...
------------------------------------------------------------------------ 
--
Compiling an example works fine, but executing it returns
------------------------------------------------------------------------ 
--
It looks like opal_init failed for some reason; your parallel process is
likely to abort.  There are many reasons that a parallel process can
fail during opal_init; some of which are due to configuration or
environment problems.  This failure appears to be an internal failure;
here's some additional information (which may only be relevant to an
Open MPI developer):
   mca_base_open failed
   --&gt; Returned value -2 instead of OPAL_SUCCESS
------------------------------------------------------------------------ 
--
I'm not sure why the problems with mca_base_open are occurring. Any  
suggestions are greatly appreciated.
Cheers,
Brian


</pre>
<p>
<p><p><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3040/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3041.php">de Almeida, Valmor F.: "[OMPI users] mca_btl_tcp_frag_send: writev failed with errno=104"</a>
<li><strong>Previous message:</strong> <a href="3039.php">Brian W. Barrett: "Re: [OMPI users] Mixed Apple cluster OpenMPI build problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3042.php">de Almeida, Valmor F.: "Re: [OMPI users] OpenMPI 1.2 on MacOSX Intel Fails"</a>
<li><strong>Reply:</strong> <a href="3042.php">de Almeida, Valmor F.: "Re: [OMPI users] OpenMPI 1.2 on MacOSX Intel Fails"</a>
<li><strong>Reply:</strong> <a href="3045.php">Brian Barrett: "Re: [OMPI users] OpenMPI 1.2 on MacOSX Intel Fails"</a>
<li><strong>Maybe reply:</strong> <a href="3046.php">Brian Powell: "Re: [OMPI users] OpenMPI 1.2 on MacOSX Intel Fails"</a>
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
