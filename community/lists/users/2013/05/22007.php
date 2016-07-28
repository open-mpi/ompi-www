<?
$subject_val = "Re: [OMPI users] Open MPI Checkpoint Restart";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 31 20:24:49 2013" -->
<!-- isoreceived="20130601002449" -->
<!-- sent="Fri, 31 May 2013 17:24:42 -0700" -->
<!-- isosent="20130601002442" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI Checkpoint Restart" -->
<!-- id="18F8BCCB-4498-4BEF-AAC4-F97512D0A71E_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CADdOW1+RbeGQXrips3N7gXspXBKeHe1WQvwLzyDT26E10=VVLg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI Checkpoint Restart<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-31 20:24:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/06/22008.php">Jed Brown: "[OMPI users] &quot;C++ compiler absolute&quot;"</a>
<li><strong>Previous message:</strong> <a href="22006.php">Neel Sunil Desai: "Re: [OMPI users] Open MPI Checkpoint Restart"</a>
<li><strong>In reply to:</strong> <a href="22006.php">Neel Sunil Desai: "Re: [OMPI users] Open MPI Checkpoint Restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/06/22015.php">Neel Sunil Desai: "Re: [OMPI users] Open MPI Checkpoint Restart"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/06/22015.php">Neel Sunil Desai: "Re: [OMPI users] Open MPI Checkpoint Restart"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did you check the items on the list given in the error? I'm no expert on ompi-checkpoint, but the error means that one of those conditions isn't being met.
<br>
<p><p>On May 31, 2013, at 4:54 PM, Neel Sunil Desai &lt;Neel.Desai_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks for the help. The path and ld_path were not set to the correct location. I was able to execute the ompi-checkpoint command. But, I got the following error.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; [ndesai_at_vcainternmpi01 ~]$ ompi-checkpoint 1803
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Error: Unable to find the requested, active MPIRUN process on this machine.
</span><br>
<span class="quotelev1">&gt;        This could be due to one of the following:
</span><br>
<span class="quotelev1">&gt;         - The jobid specified by the '--hnp-jobid' option is not 
</span><br>
<span class="quotelev1">&gt;           correct.
</span><br>
<span class="quotelev1">&gt;         - The PID specified (1803) is not that of an active MPIRUN.
</span><br>
<span class="quotelev1">&gt;         - The application with this PID is not checkpointable
</span><br>
<span class="quotelev1">&gt;         - The application with this PID is not an Open MPI application.
</span><br>
<span class="quotelev1">&gt;         - The session directory location could not be parsed.
</span><br>
<span class="quotelev1">&gt;        ompi-checkpoint attempted to use the session directory:
</span><br>
<span class="quotelev1">&gt;          /tmp/openmpi-sessions-ndesai_at_vcainternmpi01_0
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Neel.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, May 31, 2013 at 4:34 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Check that your path and ld_library_path are set to point to the directory where you installed the version you built (the --prefix=&lt;&gt; you provided).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 31, 2013, at 4:31 PM, Neel Sunil Desai &lt;Neel.Desai_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; I did install open mpi with the --with-ft=cr option.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Neel.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, May 31, 2013 at 4:25 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Okay, it should work it that version. It sounds like you didn't configure OMPI with the --with-ft=cr option - yes? Take a look at &quot;./configure -h&quot; for the ft-related options and ensure you build what you need. C/R support is not built by default.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 31, 2013, at 3:59 PM, Neel Sunil Desai &lt;Neel.Desai_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI 1.5.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, May 31, 2013 at 3:31 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What OMPI version?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 31, 2013, at 3:17 PM, Neel Sunil Desai &lt;Neel.Desai_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I forgot to add. I watched the video of Joshua Hursey and when I type ompi_info | grep FT, I get FT Checkpoint Support: no ( checkpoint thread : no). I do not get anything when I type ompi_info | grep crs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Neel.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22007/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/06/22008.php">Jed Brown: "[OMPI users] &quot;C++ compiler absolute&quot;"</a>
<li><strong>Previous message:</strong> <a href="22006.php">Neel Sunil Desai: "Re: [OMPI users] Open MPI Checkpoint Restart"</a>
<li><strong>In reply to:</strong> <a href="22006.php">Neel Sunil Desai: "Re: [OMPI users] Open MPI Checkpoint Restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/06/22015.php">Neel Sunil Desai: "Re: [OMPI users] Open MPI Checkpoint Restart"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/06/22015.php">Neel Sunil Desai: "Re: [OMPI users] Open MPI Checkpoint Restart"</a>
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
