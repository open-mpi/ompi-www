<?
$subject_val = "Re: [OMPI users] Error in mx_init message";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 19 04:31:51 2008" -->
<!-- isoreceived="20080619083151" -->
<!-- sent="Thu, 19 Jun 2008 09:31:26 +0100" -->
<!-- isosent="20080619083126" -->
<!-- name="SLIM H.A." -->
<!-- email="h.a.slim_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error in mx_init message" -->
<!-- id="BDDB7C5009659447B2F1747B53854FE801BDF616_at_EXDUR1.mds.ad.dur.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="787FD4F1-0B21-42DC-B3EE-5FA874388777_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error in mx_init message<br>
<strong>From:</strong> SLIM H.A. (<em>h.a.slim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-19 04:31:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5934.php">Pavel Shamis (Pasha): "Re: [OMPI users] Open MPI timeout problems."</a>
<li><strong>Previous message:</strong> <a href="5932.php">Rainer Keller: "Re: [OMPI users] Error in mx_init message"</a>
<li><strong>In reply to:</strong> <a href="5928.php">George Bosilca: "Re: [OMPI users] Error in mx_init message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5941.php">George Bosilca: "Re: [OMPI users] Error in mx_init message"</a>
<li><strong>Reply:</strong> <a href="5941.php">George Bosilca: "Re: [OMPI users] Error in mx_init message"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George
<br>
<p>I believe this got lost in my previous reply. I followed your suggestion
<br>
and got a different error message:
<br>
<p>------------------------------------------------------------------------
<br>
<pre>
--
No available pml components were found!
This means that there are no components of this type installed on your
system or all the components reported that they could not be used.
This is a fatal error; your MPI process is likely to abort.  Check the
output of the &quot;ompi_info&quot; command and ensure that components of this
type are available on your system.  You may also wish to check the value
of the &quot;component_path&quot; MCA parameter and ensure that it has at least
one directory that contains valid MCA components.
------------------------------------------------------------------------
--
[node258:13595] PML ^cm cannot be selected
------------------------------------------------------------------------
--
These are the lines in my GridEngine script:
setenv OMPI_MCA_btl &quot;openib,self,sm&quot;
setenv OMPI_MCA_pml &quot;^cm&quot;
mpirun -np $NSLOTS $exe 
The run appears to fail.
Am I doing something wrong here?
Thanks
Henk 
&gt; -----Original Message-----
&gt; From: users-bounces_at_[hidden] 
&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of George Bosilca
&gt; Sent: 18 June 2008 15:27
&gt; To: Open MPI Users
&gt; Subject: Re: [OMPI users] Error in mx_init message
&gt; 
&gt; This is a different issue. On top of Myrinet, Open MPI support two
&gt; nodes: cm and the others. Basically, the difference is how 
&gt; the card will be used. If you only specify the btls then Open 
&gt; MPI will try to initialize the CM PML and that's how this 
&gt; error message appears. If you add OMPI_MCA_pml=^cm to your 
&gt; environment, then this warning will go away.
&gt; 
&gt;    george.
&gt; 
&gt; On Jun 18, 2008, at 4:22 PM, SLIM H.A. wrote:
&gt; 
&gt; &gt;
&gt; &gt; I have OpenMPI-1.2.5 configured with myrinet and infiniband:
&gt; &gt;
&gt; &gt; OMPI_MCA_btl=openib,self,sm
&gt; &gt;
&gt; &gt; The job runs with the &quot;error&quot; message
&gt; &gt;
&gt; &gt; &quot;Error in mx_init (error MX driver not loaded.)&quot;
&gt; &gt;
&gt; &gt; which makes sense in itself as there is no myrinet card on the node.
&gt; &gt;
&gt; &gt; Is it correct to assume that the ib interconnect will be 
&gt; used anyway?
&gt; &gt;
&gt; &gt; I saw an old email with a similar query and a comment that this 
&gt; &gt; message would be removed in a future release, has that happened yet?
&gt; &gt;
&gt; &gt; Thanks
&gt; &gt;
&gt; &gt; Henk
&gt; &gt;
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5934.php">Pavel Shamis (Pasha): "Re: [OMPI users] Open MPI timeout problems."</a>
<li><strong>Previous message:</strong> <a href="5932.php">Rainer Keller: "Re: [OMPI users] Error in mx_init message"</a>
<li><strong>In reply to:</strong> <a href="5928.php">George Bosilca: "Re: [OMPI users] Error in mx_init message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5941.php">George Bosilca: "Re: [OMPI users] Error in mx_init message"</a>
<li><strong>Reply:</strong> <a href="5941.php">George Bosilca: "Re: [OMPI users] Error in mx_init message"</a>
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
