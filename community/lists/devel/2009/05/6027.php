<?
$subject_val = "Re: [OMPI devel] OMPI 1.3 branch";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 14 13:09:48 2009" -->
<!-- isoreceived="20090514170948" -->
<!-- sent="Thu, 14 May 2009 11:09:41 -0600" -->
<!-- isosent="20090514170941" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI 1.3 branch" -->
<!-- id="71d2d8cc0905141009u3f049633hbaf0a7696603c42b_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A0C4B3E.2090000_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI 1.3 branch<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-14 13:09:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6028.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Previous message:</strong> <a href="6026.php">Terry Dontje: "Re: [OMPI devel] OMPI 1.3 branch"</a>
<li><strong>In reply to:</strong> <a href="6026.php">Terry Dontje: "Re: [OMPI devel] OMPI 1.3 branch"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, May 14, 2009 at 10:47 AM, Terry Dontje &lt;Terry.Dontje_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi folks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I encourage people to please look at your MTT outputs. As we are preparing
</span><br>
<span class="quotelev2">&gt;&gt; to roll the 1.3.3 release, I am seeing a lot of problems on the branch:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. timeouts, coming in two forms: (a) MPI_Abort hanging, and (b)
</span><br>
<span class="quotelev2">&gt;&gt; collectives hanging (this is mostly on Solaris)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Can you clarify or send me a link that makes you believe b is mostly
</span><br>
<span class="quotelev1">&gt; solaris.  Looking at last night's Sun's MTT 1.3 nightly runs I see 47
</span><br>
<span class="quotelev1">&gt; timeouts on Linux and 24 timeouts on Solaris.  That doesn't constitute
</span><br>
<span class="quotelev1">&gt; mostly Solaris to me.  Also how are you determining these timeouts are
</span><br>
<span class="quotelev1">&gt; Collective based?  I have a theory they are but I don't have a clear smoking
</span><br>
<span class="quotelev1">&gt; gun as of yet.
</span><br>
<p><p>I looked at this MTT report, which showed it hanging in a whole bunch of
<br>
collective tests:
<br>
<p><a href="http://www.open-mpi.org/mtt/index.php?limit=&amp;wrap=&amp;trial=&amp;enable_drilldowns=&amp;yaxis_scale=&amp;xaxis_scale=&amp;hide_subtitle=&amp;split_graphs=&amp;remote_go=&amp;do_cookies=&amp;phase=test_run&amp;text_start_timestamp=2009-05-13+15%3A15%3A25+-+2009-05-14+15%3A15%3A25&amp;text_platform_hardwar">http://www.open-mpi.org/mtt/index.php?limit=&amp;wrap=&amp;trial=&amp;enable_drilldowns=&amp;yaxis_scale=&amp;xaxis_scale=&amp;hide_subtitle=&amp;split_graphs=&amp;remote_go=&amp;do_cookies=&amp;phase=test_run&amp;text_start_timestamp=2009-05-13+15%3A15%3A25+-+2009-05-14+15%3A15%3A25&amp;text_platform_hardwar</a>e=
<br>
^x86_64%24&amp;show_platform_hardware=show&amp;text_os_name=^Linux%24&amp;show_os_name=show&amp;text_mpi_name=^ompi-nightly-v1.3%24&amp;show_mpi_name=show&amp;text_mpi_version=^1.3.3a1r21173%24&amp;show_mpi_version=show&amp;text_suite_name=all&amp;show_suite_name=show&amp;text_test_name=all&amp;show_test_name=hide&amp;text_np=all&amp;show_np=show&amp;text_full_command=&amp;show_full_command=show&amp;text_http_username=^sun%24&amp;show_http_username=show&amp;text_local_username=all&amp;show_local_username=hide&amp;text_platform_name=^burl-ct-v20z-10%24&amp;show_platform_name=show&amp;click=Detail&amp;phase=test_run&amp;test_result=_rt&amp;text_os_version=&amp;show_os_version=&amp;text_platform_type=&amp;show_platform_type=&amp;text_hostname=&amp;show_hostname=&amp;text_compiler_name=&amp;show_compiler_name=&amp;text_compiler_version=&amp;show_compiler_version=&amp;text_vpath_mode=&amp;show_vpath_mode=&amp;text_endian=&amp;show_endian=&amp;text_bitness=&amp;show_bitness=&amp;text_configure_arguments=&amp;text_exit_value=&amp;show_exit_value=&amp;text_exit_signal=&amp;show_exit_signal=&amp;text_duration=&amp;show_duration=&amp;text_client_serial=&amp;show_client_serial=&amp;text_result_message=&amp;text_result_stdout=&amp;text_result_stderr=&amp;text_environment=&amp;text_description=&amp;text_launcher=&amp;show_launcher=&amp;text_resource_mgr=&amp;show_resource_mgr=&amp;text_network=&amp;show_network=&amp;text_parameters=&amp;show_parameters=&amp;lastgo=summary
<br>
<p>When I look at the hangs on other systems, they are in non-collective tests.
<br>
I'm not sure what that really means, though - it was just an observation
<br>
based on this one set of tests.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been looking at some collective hangs and segv's.  These seem to
</span><br>
<span class="quotelev1">&gt; happen across different platform and OS (Linux and Solaris).  I've been
</span><br>
<span class="quotelev1">&gt; finding it really hard to reproduce.  I ran MPI_Allreduce_loc_c on a three
</span><br>
<span class="quotelev1">&gt; clusters for 2 days without a hang or segv.  I am really concerned whether
</span><br>
<span class="quotelev1">&gt; we'll even be able to get this to fail with debugging on.
</span><br>
<span class="quotelev1">&gt; I have not been able to get a core or time with a hung run in order to get
</span><br>
<span class="quotelev1">&gt; more information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. segfaults - mostly on sif, but occasionally elsewhere
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3. daemon failed to report back - this was only on sif
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We will need to correct many of these for the release - unless it proves
</span><br>
<span class="quotelev2">&gt;&gt; to be due to trivial errors, I don't see how we will be ready to roll
</span><br>
<span class="quotelev2">&gt;&gt; release candidates next week.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So let's please start taking a look at these?!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I've actually been looking at ours though I have not been extremely
</span><br>
<span class="quotelev1">&gt; vocal.  I was hoping to get more info on our timeouts before requesting
</span><br>
<span class="quotelev1">&gt; help.
</span><br>
<p><p>No problem - I wasn't pointing a finger at anyone in particular. Just wanted
<br>
to highlight that the branch is not in great shape since we had talked on
<br>
the telecon about trying to do a release next week.
<br>
<p><p><p><span class="quotelev1">&gt;  Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6027/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6028.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Previous message:</strong> <a href="6026.php">Terry Dontje: "Re: [OMPI devel] OMPI 1.3 branch"</a>
<li><strong>In reply to:</strong> <a href="6026.php">Terry Dontje: "Re: [OMPI devel] OMPI 1.3 branch"</a>
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
