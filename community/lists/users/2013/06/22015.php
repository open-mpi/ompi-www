<?
$subject_val = "Re: [OMPI users] Open MPI Checkpoint Restart";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  3 12:34:15 2013" -->
<!-- isoreceived="20130603163415" -->
<!-- sent="Mon, 3 Jun 2013 09:34:11 -0700" -->
<!-- isosent="20130603163411" -->
<!-- name="Neel Sunil Desai" -->
<!-- email="Neel.Desai_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI Checkpoint Restart" -->
<!-- id="CADdOW1+KgQaNj9J6JHbVFan1aqx5cwA_By30Lq7UjsLNibg9kw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="18F8BCCB-4498-4BEF-AAC4-F97512D0A71E_at_open-mpi.org" -->
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
<strong>Date:</strong> 2013-06-03 12:34:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22016.php">vacate: "Re: [OMPI users] I got &quot;ssh_exchange_identification&quot; errors when I mpirun over 1500 times almost at the same time"</a>
<li><strong>Previous message:</strong> <a href="22014.php">Paul Kapinos: "Re: [OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/05/22007.php">Ralph Castain: "Re: [OMPI users] Open MPI Checkpoint Restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22020.php">Neel Sunil Desai: "Re: [OMPI users] Open MPI Checkpoint Restart"</a>
<li><strong>Reply:</strong> <a href="22020.php">Neel Sunil Desai: "Re: [OMPI users] Open MPI Checkpoint Restart"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph.
<br>
<p>I checked the errors.
<br>
I do not understand what the fololowing means : The session directory
<br>
location could not be parsed.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi-checkpoint attempted to use the session directory:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/tmp/openmpi-sessions-ndesai_at_vcainternmpi01_0
<br>
I opened the /tmp/openmpi-sessions-ndesai directory and various directories
<br>
are created.
<br>
<p>Also, when I run the mpi program, I get the following errors before the
<br>
program starts running correctly:
<br>
<p>[ndesai_at_vcainternmpi01 work]$ mpirun -am ft-enable-cr --np 16 ./DecoderTest
<br>
../../decoder/test.ini
<br>
[vcainternmpi01:25341] mca: base: component_find: unable to open
<br>
/home/ndesai/mpicr/lib/openmpi/mca_crs_blcr: libcr.so.0: cannot open shared
<br>
object file: No such file or directory (ignored)
<br>
[vcainternmpi01:25342] mca: base: component_find: unable to open
<br>
/home/ndesai/mpicr/lib/openmpi/mca_crs_blcr: libcr.so.0: cannot open shared
<br>
object file: No such file or directory (ignored)
<br>
[vcainternmpi01:25343] mca: base: component_find: unable to open
<br>
/home/ndesai/mpicr/lib/openmpi/mca_crs_blcr: libcr.so.0: cannot open shared
<br>
object file: No such file or directory (ignored)
<br>
[vcainternmpi01:25344] mca: base: component_find: unable to open
<br>
/home/ndesai/mpicr/lib/openmpi/mca_crs_blcr: libcr.so.0: cannot open shared
<br>
object file: No such file or directory (ignored)
<br>
[vcainternmpi01:25347] mca: base: component_find: unable to open
<br>
/home/ndesai/mpicr/lib/openmpi/mca_crs_blcr: libcr.so.0: cannot open shared
<br>
object file: No such file or directory (ignored)
<br>
[vcainternmpi01:25354] mca: base: component_find: unable to open
<br>
/home/ndesai/mpicr/lib/openmpi/mca_crs_blcr: libcr.so.0: cannot open shared
<br>
object file: No such file or directory (ignored)
<br>
[vcainternmpi01:25356] mca: base: component_find: unable to open
<br>
/home/ndesai/mpicr/lib/openmpi/mca_crs_blcr: libcr.so.0: cannot open shared
<br>
object file: No such file or directory (ignored)
<br>
[vcainternmpi01:25337] mca: base: component_find: unable to open
<br>
/home/ndesai/mpicr/lib/openmpi/mca_crs_blcr: libcr.so.0: cannot open shared
<br>
object file: No such file or directory (ignored)
<br>
[vcainternmpi01:25338] mca: base: component_find: unable to open
<br>
/home/ndesai/mpicr/lib/openmpi/mca_crs_blcr: libcr.so.0: cannot open shared
<br>
object file: No such file or directory (ignored)
<br>
[vcainternmpi01:25339] mca: base: component_find: unable to open
<br>
/home/ndesai/mpicr/lib/openmpi/mca_crs_blcr: libcr.so.0: cannot open shared
<br>
object file: No such file or directory (ignored)
<br>
[vcainternmpi01:25340] mca: base: component_find: unable to open
<br>
/home/ndesai/mpicr/lib/openmpi/mca_crs_blcr: libcr.so.0: cannot open shared
<br>
object file: No such file or directory (ignored)
<br>
[vcainternmpi01:25355] mca: base: component_find: unable to open
<br>
/home/ndesai/mpicr/lib/openmpi/mca_crs_blcr: libcr.so.0: cannot open shared
<br>
object file: No such file or directory (ignored)
<br>
[vcainternmpi01:25359] mca: base: component_find: unable to open
<br>
/home/ndesai/mpicr/lib/openmpi/mca_crs_blcr: libcr.so.0: cannot open shared
<br>
object file: No such file or directory (ignored)
<br>
[vcainternmpi01:25357] mca: base: component_find: unable to open
<br>
/home/ndesai/mpicr/lib/openmpi/mca_crs_blcr: libcr.so.0: cannot open shared
<br>
object file: No such file or directory (ignored)
<br>
[vcainternmpi01:25358] mca: base: component_find: unable to open
<br>
/home/ndesai/mpicr/lib/openmpi/mca_crs_blcr: libcr.so.0: cannot open shared
<br>
object file: No such file or directory (ignored)
<br>
[vcainternmpi01:25362] mca: base: component_find: unable to open
<br>
/home/ndesai/mpicr/lib/openmpi/mca_crs_blcr: libcr.so.0: cannot open shared
<br>
object file: No such file or directory (ignored)
<br>
<p>I also checked the mca-params-conf file and all it contained were comments.
<br>
Do I have to make any changes there for getting correct snapshots?
<br>
<p>Thanks a lot,
<br>
Neel.
<br>
<p>On Fri, May 31, 2013 at 5:24 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Did you check the items on the list given in the error? I'm no expert on
</span><br>
<span class="quotelev1">&gt; ompi-checkpoint, but the error means that one of those conditions isn't
</span><br>
<span class="quotelev1">&gt; being met.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On May 31, 2013, at 4:54 PM, Neel Sunil Desai &lt;Neel.Desai_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the help. The path and ld_path were not set to the correct
</span><br>
<span class="quotelev1">&gt; location. I was able to execute the ompi-checkpoint command. But, I got the
</span><br>
<span class="quotelev1">&gt; following error.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Check that your path and ld_library_path are set to point to the
</span><br>
<span class="quotelev2">&gt;&gt; directory where you installed the version you built (the --prefix=&lt;&gt; you
</span><br>
<span class="quotelev2">&gt;&gt; provided).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  On May 31, 2013, at 4:31 PM, Neel Sunil Desai &lt;Neel.Desai_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hi Ralph,
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Okay, it should work it that version. It sounds like you didn't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure OMPI with the --with-ft=cr option - yes? Take a look at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;./configure -h&quot; for the ft-related options and ensure you build what you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; need. C/R support is not built by default.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  On May 31, 2013, at 3:59 PM, Neel Sunil Desai &lt;Neel.Desai_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI 1.5.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, May 31, 2013 at 3:31 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What OMPI version?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On May 31, 2013, at 3:17 PM, Neel Sunil Desai &lt;Neel.Desai_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; I forgot to add. I watched the video of Joshua Hursey and when I type
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_info | grep FT, I get FT Checkpoint Support: no ( checkpoint thread :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; no). I do not get anything when I type ompi_info | grep crs.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Neel.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22015/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22016.php">vacate: "Re: [OMPI users] I got &quot;ssh_exchange_identification&quot; errors when I mpirun over 1500 times almost at the same time"</a>
<li><strong>Previous message:</strong> <a href="22014.php">Paul Kapinos: "Re: [OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/05/22007.php">Ralph Castain: "Re: [OMPI users] Open MPI Checkpoint Restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22020.php">Neel Sunil Desai: "Re: [OMPI users] Open MPI Checkpoint Restart"</a>
<li><strong>Reply:</strong> <a href="22020.php">Neel Sunil Desai: "Re: [OMPI users] Open MPI Checkpoint Restart"</a>
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
