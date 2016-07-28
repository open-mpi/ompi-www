<?
$subject_val = "Re: [OMPI users] inconsistant FAQ entries - building openmpi with sge	and running openmpi with sge";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  9 14:04:05 2009" -->
<!-- isoreceived="20090309180405" -->
<!-- sent="Mon, 09 Mar 2009 14:03:41 -0400" -->
<!-- isosent="20090309180341" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] inconsistant FAQ entries - building openmpi with sge	and running openmpi with sge" -->
<!-- id="49B559FD.90101_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52B7AD4481DAB448AA2A477E44A609F208CF15B5_at_XCH-SW-1V1.sw.nos.boeing.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] inconsistant FAQ entries - building openmpi with sge	and running openmpi with sge<br>
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-09 14:03:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8371.php">Prasanna Ranganathan: "[OMPI users] OpenMPI program getting stuck at poll()"</a>
<li><strong>Previous message:</strong> <a href="8369.php">Borenstein, Bernard S: "[OMPI users] inconsistant FAQ entries - building openmpi with sge and running openmpi with sge"</a>
<li><strong>In reply to:</strong> <a href="8369.php">Borenstein, Bernard S: "[OMPI users] inconsistant FAQ entries - building openmpi with sge and running openmpi with sge"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, you are right.  Thanks for pointing out the inconsistency.  I will 
<br>
fix this.
<br>
<p>Rolf
<br>
<p>On 03/09/09 13:55, Borenstein, Bernard S wrote:
<br>
<span class="quotelev1">&gt; The building openmpi with sge faq says :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For Open MPI v1.2, SGE support is built automatically; there is nothing 
</span><br>
<span class="quotelev1">&gt; that you need to do. Note that SGE support first appeared in v1.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; **NOTE:** For Open MPI v1.3, or starting with trunk revision number 
</span><br>
<span class="quotelev1">&gt; r16422, you will need to explicitly request the SGE support with the 
</span><br>
<span class="quotelev1">&gt; &quot;|--with-sge|&quot; command line switch to Open MPI's |configure| script. For 
</span><br>
<span class="quotelev1">&gt; example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; shell$ ./configure --with-sge
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After Open MPI is installed, you should see two components named 
</span><br>
<span class="quotelev1">&gt; &quot;|gridengine|&quot;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; shell$ ompi_info | grep gridengine
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                  MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.3)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                  MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.3)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Specific frameworks and version numbers may vary, depending on your 
</span><br>
<span class="quotelev1">&gt; version of Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Under running with sge :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; o verify if support for SGE is configured into your Open MPI 
</span><br>
<span class="quotelev1">&gt; installation, run ompi_info as shown below and look for //gridengine//. 
</span><br>
<span class="quotelev1">&gt; The components you will see are slightly different between v1.2 and v1.3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For Open MPI 1.2:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; shell$ ompi_info | grep gridengine
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                  MCA ras: gridengine (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                  MCA pls: gridengine (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For Open MPI 1.3:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; shell$ ompi_info | grep gridengine
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                  MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe the building portion should be modified to be consistent with 
</span><br>
<span class="quotelev1">&gt; the running portion.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanx,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bernie Borenstein
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The Boeing Company
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; __________ Information from ESET NOD32 Antivirus, version of virus 
</span><br>
<span class="quotelev1">&gt; signature database 3921 (20090309) __________
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The message was checked by ESET NOD32 Antivirus.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.eset.com">http://www.eset.com</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8371.php">Prasanna Ranganathan: "[OMPI users] OpenMPI program getting stuck at poll()"</a>
<li><strong>Previous message:</strong> <a href="8369.php">Borenstein, Bernard S: "[OMPI users] inconsistant FAQ entries - building openmpi with sge and running openmpi with sge"</a>
<li><strong>In reply to:</strong> <a href="8369.php">Borenstein, Bernard S: "[OMPI users] inconsistant FAQ entries - building openmpi with sge and running openmpi with sge"</a>
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
