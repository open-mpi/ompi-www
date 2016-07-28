<?
$subject_val = "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 07:49:23 2008" -->
<!-- isoreceived="20080327114923" -->
<!-- sent="Thu, 27 Mar 2008 13:49:17 +0200" -->
<!-- isosent="20080327114917" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RMAPS rank_file component patch and modifications for review" -->
<!-- id="453d39990803270449t47602a13tc268816e11af3ee_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C40FA29A.CD14%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RMAPS rank_file component patch and modifications for review<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-27 07:49:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3545.php">Jeff Squyres: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
<li><strong>Previous message:</strong> <a href="3543.php">Jeff Squyres: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>In reply to:</strong> <a href="3532.php">Ralph H Castain: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3547.php">Jeff Squyres: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>Reply:</strong> <a href="3547.php">Jeff Squyres: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
thanks for the comments. I will definetly implement all of them and commit
<br>
the code as soon as I finished.
<br>
<p>Also I experience few problems with using opal_verbose_output, either there
<br>
is a bugs or I am doing something wrong.
<br>
<p><p>/home/USERS/lenny/OMPI_ORTE_DEBUG/bin/mpirun -mca mca_verbose 0 -mca
<br>
paffinity_base_verbose 1 --byslot -np 2 -hostfile hostfile -mca
<br>
btl_openib_max_lmc 1  -mca opal_paffinity_alone 1 -mca btl_openib_verbose 1
<br>
/home/USERS/lenny/TESTS/ORTE/mpi_p01_debug -t lt
<br>
<p><p>/home/USERS/lenny/TESTS/ORTE/mpi_p01_debug: symbol lookup error:
<br>
/home/USERS/lenny/OMPI_ORTE_DEBUG//lib/openmpi/mca_btl_openib.so: undefined
<br>
symbol: mca_btl_base_out
<br>
/home/USERS/lenny/TESTS/ORTE/mpi_p01_debug: symbol lookup error:
<br>
/home/USERS/lenny/OMPI_ORTE_DEBUG//lib/openmpi/mca_btl_openib.so: undefined
<br>
symbol: mca_btl_base_out
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 1 with PID 5896 on
<br>
node witch17 exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
<p><p>On Wed, Mar 26, 2008 at 2:50 PM, Ralph H Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I would tend to echo Tim's suggestions. I note that you do lookup that
</span><br>
<span class="quotelev1">&gt; opal
</span><br>
<span class="quotelev1">&gt; mca param in orte as well. I know you sent me a note about that off-list -
</span><br>
<span class="quotelev1">&gt; I
</span><br>
<span class="quotelev1">&gt; apologize for not getting to it yet, but was swamped yesterday.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think the solution suggested in #1 below is the right approach. Looking
</span><br>
<span class="quotelev1">&gt; up
</span><br>
<span class="quotelev1">&gt; opal params in orte or ompi is probably not a good idea. We have had
</span><br>
<span class="quotelev1">&gt; problems in the past where params were looked up in multiple places as
</span><br>
<span class="quotelev1">&gt; people -do- sometimes change the names (ahem...).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, I would suggest using the macro version of verbose
</span><br>
<span class="quotelev1">&gt; OPAL_OUTPUT_VERBOSE
</span><br>
<span class="quotelev1">&gt; so that it compiles out for non-debug builds - up to you. Many of us use
</span><br>
<span class="quotelev1">&gt; it
</span><br>
<span class="quotelev1">&gt; as we don't need the output from optimized builds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Other than that, I think this looks fine. I do truly appreciate the
</span><br>
<span class="quotelev1">&gt; cleanup
</span><br>
<span class="quotelev1">&gt; of ompi_mpi_init.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 3/26/08 6:09 AM, &quot;Tim Prins&quot; &lt;tprins_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Lenny,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This looks good. But I have a couple of suggestions (which others may
</span><br>
<span class="quotelev2">&gt; &gt; disagree with):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. You register an opal mca parameter, but look it up in ompi, then call
</span><br>
<span class="quotelev2">&gt; &gt; a opal function with the result. What if you had a function
</span><br>
<span class="quotelev2">&gt; &gt; opal_paffinity_base_set_slots(long rank) (or some other name, I don't
</span><br>
<span class="quotelev2">&gt; &gt; care) which looked up the mca parameter and then setup the slots as you
</span><br>
<span class="quotelev2">&gt; &gt; are doing if it is fount. This would make things a bit cleaner IMHO.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2. the functions in the paffinety base should be prefixed with
</span><br>
<span class="quotelev2">&gt; &gt; 'opal_paffinity_base_'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 3. Why was the ompi_debug_flag added? It is not used anywhere.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 4. You probably do not need to add the opal debug flag. There is already
</span><br>
<span class="quotelev2">&gt; &gt; a 'paffinity_base_verbose' flag which should suit your purposes fine. So
</span><br>
<span class="quotelev2">&gt; &gt; you should just be able to replace all of the conditional output
</span><br>
<span class="quotelev2">&gt; &gt; statements in paffinity with something like
</span><br>
<span class="quotelev2">&gt; &gt; opal_output_verbose(10, opal_paffinity_base_output, ...),
</span><br>
<span class="quotelev2">&gt; &gt; where 10 is the verbosity level number.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Tim
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi, all
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Attached patch for modified Rank_File RMAPS component.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1.    introduced new general purpose debug flags
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       mpi_debug
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       opal_debug
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2.    introduced new mca parameter opal_paffinity_slot_list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 3.    ompi_mpi_init cleaned from opal paffinity functions
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 4.    opal paffinity functions moved to new file
</span><br>
<span class="quotelev3">&gt; &gt;&gt; opal/mca/paffinity/base/paffinity_base_service.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 5.    rank_file component files were renamed according to prefix policy
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 6.    global variables renamed as well.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 7.    few bug fixes that were brought during previous discussions.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 8.    If user defines opal_paffinity_alone and rmaps_rank_file_path or
</span><br>
<span class="quotelev3">&gt; &gt;&gt; opal_paffinity_slot_list,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; then he gets a Warning that only opal_paffinity_alone will be used.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; .
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Best Regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Lenny.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3544/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3545.php">Jeff Squyres: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
<li><strong>Previous message:</strong> <a href="3543.php">Jeff Squyres: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>In reply to:</strong> <a href="3532.php">Ralph H Castain: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3547.php">Jeff Squyres: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>Reply:</strong> <a href="3547.php">Jeff Squyres: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
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
