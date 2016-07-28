<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 14 13:00:59 2006" -->
<!-- isoreceived="20060314180059" -->
<!-- sent="Tue, 14 Mar 2006 12:00:57 -0600" -->
<!-- isosent="20060314180057" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_connect and singleton init" -->
<!-- id="441704D9.40501_at_cs.uh.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20060314173308.GA4010_at_mcs.anl.gov" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-14 13:00:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0856.php">Edgar Gabriel: "Re: [OMPI users] comm_join and singleton init"</a>
<li><strong>Previous message:</strong> <a href="0854.php">Edgar Gabriel: "Re: [OMPI users] comm_join and singleton init"</a>
<li><strong>In reply to:</strong> <a href="0853.php">Robert Latham: "[OMPI users] MPI_Comm_connect and singleton init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0857.php">Robert Latham: "Re: [OMPI users] MPI_Comm_connect and singleton init"</a>
<li><strong>Reply:</strong> <a href="0857.php">Robert Latham: "Re: [OMPI users] MPI_Comm_connect and singleton init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
you are touching here a difficult area in Open MPI:
<br>
<p>- name publishing across independent jobs does unfortunatly not work 
<br>
right now (It does work, if all processes have been started by the same 
<br>
mpirun or if the have been spawned by a father process using 
<br>
MPI_Comm_spawn). Your approach with passing the port as a command line 
<br>
option should work however.
<br>
<p>- you have to start however the orted daemon *before* starting both jobs 
<br>
using the flags
<br>
' orted --seed --persistent --scope public'
<br>
These flags are however currently just lightly tested, since a brand new 
<br>
runtime environment with much better support for these operations is 
<br>
currently under development.
<br>
<p>- regarding the 'pack data mismatch': do both machines which you are 
<br>
using have the same data representation? The reason I ask is because 
<br>
this looks like a data type mismatch error, and Open MPI currently does 
<br>
have some restriction regarding different data formats and endianness...
<br>
<p>Thanks
<br>
Edgar
<br>
<p>Robert Latham wrote:
<br>
<p><span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt; In playing around with process management routines, I found another
</span><br>
<span class="quotelev1">&gt; issue.  This one might very well be operator error, or something
</span><br>
<span class="quotelev1">&gt; implementation specific.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've got two processes (a and b), linked with openmpi, but started
</span><br>
<span class="quotelev1">&gt; independently (no mpiexec).  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - A starts up and calls MPI_Init
</span><br>
<span class="quotelev1">&gt; - A calls MPI_Open_port, prints out the port name to stdout, then
</span><br>
<span class="quotelev1">&gt;   calls MPI_Comm_accept and blocks.
</span><br>
<span class="quotelev1">&gt; - B takes as a command line argument the port
</span><br>
<span class="quotelev1">&gt;   name printed out by A.  It calls MPI_Init and then and passes that
</span><br>
<span class="quotelev1">&gt;   port name to MPI_Comm_connect
</span><br>
<span class="quotelev1">&gt; - B gets the following error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [leela.mcs.anl.gov:04177] [0,0,0] ORTE_ERROR_LOG: Pack data mismatch
</span><br>
<span class="quotelev1">&gt; in file ../../../orte/dps/dps_unpack.c at line 121
</span><br>
<span class="quotelev1">&gt; [leela.mcs.anl.gov:04177] [0,0,0] ORTE_ERROR_LOG: Pack data mismatch
</span><br>
<span class="quotelev1">&gt; in file ../../../orte/dps/dps_unpack.c at line 95
</span><br>
<span class="quotelev1">&gt; [leela.mcs.anl.gov:04177] *** An error occurred in MPI_Comm_connect
</span><br>
<span class="quotelev1">&gt; [leela.mcs.anl.gov:04177] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [leela.mcs.anl.gov:04177] *** MPI_ERR_UNKNOWN: unknown error
</span><br>
<span class="quotelev1">&gt; [leela.mcs.anl.gov:04177] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [leela.mcs.anl.gov:04177] [0,0,0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/pls/base/pls_base_proxy.c at line 183
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - A is still waiting for someone to connect to it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did I pass MPI port strings between programs the correct way, or is
</span><br>
<span class="quotelev1">&gt; MPI_Publish_name/MPI_Lookup_name the prefered way to pass around this
</span><br>
<span class="quotelev1">&gt; information?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; ==rob
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Edgar Gabriel
Assistant Professor
Department of Computer Science          email:gabriel_at_[hidden]
University of Houston                   <a href="http://www.cs.uh.edu/~gabriel">http://www.cs.uh.edu/~gabriel</a>
Philip G. Hoffman Hall, Room 524        Tel: +1 (713) 743-3857
Houston, TX-77204, USA                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0856.php">Edgar Gabriel: "Re: [OMPI users] comm_join and singleton init"</a>
<li><strong>Previous message:</strong> <a href="0854.php">Edgar Gabriel: "Re: [OMPI users] comm_join and singleton init"</a>
<li><strong>In reply to:</strong> <a href="0853.php">Robert Latham: "[OMPI users] MPI_Comm_connect and singleton init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0857.php">Robert Latham: "Re: [OMPI users] MPI_Comm_connect and singleton init"</a>
<li><strong>Reply:</strong> <a href="0857.php">Robert Latham: "Re: [OMPI users] MPI_Comm_connect and singleton init"</a>
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
