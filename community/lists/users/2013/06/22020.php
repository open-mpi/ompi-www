<?
$subject_val = "Re: [OMPI users] Open MPI Checkpoint Restart";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  4 11:57:50 2013" -->
<!-- isoreceived="20130604155750" -->
<!-- sent="Tue, 4 Jun 2013 08:57:45 -0700" -->
<!-- isosent="20130604155745" -->
<!-- name="Neel Sunil Desai" -->
<!-- email="Neel.Desai_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI Checkpoint Restart" -->
<!-- id="CADdOW1K7_HFb4+9PNrhNz97dt3pbDbpfyz0ZvBJvtt=VzRZ-fg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CADdOW1+KgQaNj9J6JHbVFan1aqx5cwA_By30Lq7UjsLNibg9kw_at_mail.gmail.com" -->
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
<strong>From:</strong> Neel Sunil Desai (<em>Neel.Desai_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-04 11:57:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22021.php">vacate: "[OMPI users] &quot;ssh: connect to host XXX.XXX.XXX.XX port 22: connection timed out&quot; errors during mpirun"</a>
<li><strong>Previous message:</strong> <a href="22019.php">W Spector: "Re: [OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set"</a>
<li><strong>In reply to:</strong> <a href="22015.php">Neel Sunil Desai: "Re: [OMPI users] Open MPI Checkpoint Restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/05/22005.php">George Bosilca: "Re: [OMPI users] Open MPI Checkpoint Restart"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>So, I was able to remove the &quot;cannot open shared file or object&quot; errors.
<br>
But I am not able to checkpoint yet. When I enter ompi-checkpoint PID of
<br>
mpirun, it does not return anything  (not even a new prompt). In my
<br>
mca-params.conf file, I added
<br>
<p>sstore=stage
<br>
<p>sstore_stage_local_snapshot_dir=/tmp/ndesai/local
<br>
sstore_base_global_snapshot_dir=/tmp/ndesai/global
<br>
<p><p>I created the local and global folders myself.
<br>
<p>I am running all the processes on a single machine.
<br>
What am I doing wrong? Please guide me.
<br>
<p>Thanks,
<br>
Neel.
<br>
<p><p>On Mon, Jun 3, 2013 at 9:34 AM, Neel Sunil Desai &lt;Neel.Desai_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I checked the errors.
</span><br>
<span class="quotelev1">&gt; I do not understand what the fololowing means : The session directory
</span><br>
<span class="quotelev1">&gt; location could not be parsed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        ompi-checkpoint attempted to use the session directory:
</span><br>
<span class="quotelev1">&gt;          /tmp/openmpi-sessions-ndesai_at_vcainternmpi01_0
</span><br>
<span class="quotelev1">&gt; I opened the /tmp/openmpi-sessions-ndesai directory and various
</span><br>
<span class="quotelev1">&gt; directories are created.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, when I run the mpi program, I get the following errors before the
</span><br>
<span class="quotelev1">&gt; program starts running correctly:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [ndesai_at_vcainternmpi01 work]$ mpirun -am ft-enable-cr --np 16
</span><br>
<span class="quotelev1">&gt; ./DecoderTest ../../decoder/test.ini
</span><br>
<span class="quotelev1">&gt; [vcainternmpi01:25341] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /home/ndesai/mpicr/lib/openmpi/mca_crs_blcr: libcr.so.0: cannot open shared
</span><br>
<span class="quotelev1">&gt; object file: No such file or directory (ignored)
</span><br>
<span class="quotelev1">&gt; [vcainternmpi01:25342] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /home/ndesai/mpicr/lib/openmpi/mca_crs_blcr: libcr.so.0: cannot open shared
</span><br>
<span class="quotelev1">&gt; object file: No such file or directory (ignored)
</span><br>
<span class="quotelev1">&gt; [vcainternmpi01:25343] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /home/ndesai/mpicr/lib/openmpi/mca_crs_blcr: libcr.so.0: cannot open shared
</span><br>
<span class="quotelev1">&gt; object file: No such file or directory (ignored)
</span><br>
<span class="quotelev1">&gt; [vcainternmpi01:25344] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /home/ndesai/mpicr/lib/openmpi/mca_crs_blcr: libcr.so.0: cannot open shared
</span><br>
<span class="quotelev1">&gt; object file: No such file or directory (ignored)
</span><br>
<span class="quotelev1">&gt; [vcainternmpi01:25347] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /home/ndesai/mpicr/lib/openmpi/mca_crs_blcr: libcr.so.0: cannot open shared
</span><br>
<span class="quotelev1">&gt; object file: No such file or directory (ignored)
</span><br>
<span class="quotelev1">&gt; [vcainternmpi01:25354] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /home/ndesai/mpicr/lib/openmpi/mca_crs_blcr: libcr.so.0: cannot open shared
</span><br>
<span class="quotelev1">&gt; object file: No such file or directory (ignored)
</span><br>
<span class="quotelev1">&gt; [vcainternmpi01:25356] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /home/ndesai/mpicr/lib/openmpi/mca_crs_blcr: libcr.so.0: cannot open shared
</span><br>
<span class="quotelev1">&gt; object file: No such file or directory (ignored)
</span><br>
<span class="quotelev1">&gt; [vcainternmpi01:25337] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /home/ndesai/mpicr/lib/openmpi/mca_crs_blcr: libcr.so.0: cannot open shared
</span><br>
<span class="quotelev1">&gt; object file: No such file or directory (ignored)
</span><br>
<span class="quotelev1">&gt; [vcainternmpi01:25338] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /home/ndesai/mpicr/lib/openmpi/mca_crs_blcr: libcr.so.0: cannot open shared
</span><br>
<span class="quotelev1">&gt; object file: No such file or directory (ignored)
</span><br>
<span class="quotelev1">&gt; [vcainternmpi01:25339] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /home/ndesai/mpicr/lib/openmpi/mca_crs_blcr: libcr.so.0: cannot open shared
</span><br>
<span class="quotelev1">&gt; object file: No such file or directory (ignored)
</span><br>
<span class="quotelev1">&gt; [vcainternmpi01:25340] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /home/ndesai/mpicr/lib/openmpi/mca_crs_blcr: libcr.so.0: cannot open shared
</span><br>
<span class="quotelev1">&gt; object file: No such file or directory (ignored)
</span><br>
<span class="quotelev1">&gt; [vcainternmpi01:25355] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /home/ndesai/mpicr/lib/openmpi/mca_crs_blcr: libcr.so.0: cannot open shared
</span><br>
<span class="quotelev1">&gt; object file: No such file or directory (ignored)
</span><br>
<span class="quotelev1">&gt; [vcainternmpi01:25359] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /home/ndesai/mpicr/lib/openmpi/mca_crs_blcr: libcr.so.0: cannot open shared
</span><br>
<span class="quotelev1">&gt; object file: No such file or directory (ignored)
</span><br>
<span class="quotelev1">&gt; [vcainternmpi01:25357] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /home/ndesai/mpicr/lib/openmpi/mca_crs_blcr: libcr.so.0: cannot open shared
</span><br>
<span class="quotelev1">&gt; object file: No such file or directory (ignored)
</span><br>
<span class="quotelev1">&gt; [vcainternmpi01:25358] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /home/ndesai/mpicr/lib/openmpi/mca_crs_blcr: libcr.so.0: cannot open shared
</span><br>
<span class="quotelev1">&gt; object file: No such file or directory (ignored)
</span><br>
<span class="quotelev1">&gt; [vcainternmpi01:25362] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /home/ndesai/mpicr/lib/openmpi/mca_crs_blcr: libcr.so.0: cannot open shared
</span><br>
<span class="quotelev1">&gt; object file: No such file or directory (ignored)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also checked the mca-params-conf file and all it contained were
</span><br>
<span class="quotelev1">&gt; comments. Do I have to make any changes there for getting correct snapshots?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot,
</span><br>
<span class="quotelev1">&gt; Neel.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, May 31, 2013 at 5:24 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Did you check the items on the list given in the error? I'm no expert on
</span><br>
<span class="quotelev2">&gt;&gt; ompi-checkpoint, but the error means that one of those conditions isn't
</span><br>
<span class="quotelev2">&gt;&gt; being met.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  On May 31, 2013, at 4:54 PM, Neel Sunil Desai &lt;Neel.Desai_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the help. The path and ld_path were not set to the correct
</span><br>
<span class="quotelev2">&gt;&gt; location. I was able to execute the ompi-checkpoint command. But, I got the
</span><br>
<span class="quotelev2">&gt;&gt; following error.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [ndesai_at_vcainternmpi01 ~]$ ompi-checkpoint 1803
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Error: Unable to find the requested, active MPIRUN process on this
</span><br>
<span class="quotelev2">&gt;&gt; machine.
</span><br>
<span class="quotelev2">&gt;&gt;        This could be due to one of the following:
</span><br>
<span class="quotelev2">&gt;&gt;         - The jobid specified by the '--hnp-jobid' option is not
</span><br>
<span class="quotelev2">&gt;&gt;           correct.
</span><br>
<span class="quotelev2">&gt;&gt;         - The PID specified (1803) is not that of an active MPIRUN.
</span><br>
<span class="quotelev2">&gt;&gt;         - The application with this PID is not checkpointable
</span><br>
<span class="quotelev2">&gt;&gt;         - The application with this PID is not an Open MPI application.
</span><br>
<span class="quotelev2">&gt;&gt;         - The session directory location could not be parsed.
</span><br>
<span class="quotelev2">&gt;&gt;        ompi-checkpoint attempted to use the session directory:
</span><br>
<span class="quotelev2">&gt;&gt;          /tmp/openmpi-sessions-ndesai_at_vcainternmpi01_0
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Neel.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, May 31, 2013 at 4:34 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Check that your path and ld_library_path are set to point to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; directory where you installed the version you built (the --prefix=&lt;&gt; you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; provided).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  On May 31, 2013, at 4:31 PM, Neel Sunil Desai &lt;Neel.Desai_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Hi Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I did install open mpi with the --with-ft=cr option.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Neel.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, May 31, 2013 at 4:25 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Okay, it should work it that version. It sounds like you didn't
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure OMPI with the --with-ft=cr option - yes? Take a look at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;./configure -h&quot; for the ft-related options and ensure you build what you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; need. C/R support is not built by default.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  On May 31, 2013, at 3:59 PM, Neel Sunil Desai &lt;Neel.Desai_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI 1.5.4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Fri, May 31, 2013 at 3:31 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; What OMPI version?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On May 31, 2013, at 3:17 PM, Neel Sunil Desai &lt;Neel.Desai_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; I forgot to add. I watched the video of Joshua Hursey and when I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; type ompi_info | grep FT, I get FT Checkpoint Support: no ( checkpoint
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; thread : no). I do not get anything when I type ompi_info | grep crs.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Neel.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22020/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22021.php">vacate: "[OMPI users] &quot;ssh: connect to host XXX.XXX.XXX.XX port 22: connection timed out&quot; errors during mpirun"</a>
<li><strong>Previous message:</strong> <a href="22019.php">W Spector: "Re: [OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set"</a>
<li><strong>In reply to:</strong> <a href="22015.php">Neel Sunil Desai: "Re: [OMPI users] Open MPI Checkpoint Restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/05/22005.php">George Bosilca: "Re: [OMPI users] Open MPI Checkpoint Restart"</a>
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
