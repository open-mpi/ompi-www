<?
$subject_val = "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 31 07:58:06 2008" -->
<!-- isoreceived="20080331115806" -->
<!-- sent="Mon, 31 Mar 2008 07:57:55 -0400" -->
<!-- isosent="20080331115755" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RMAPS rank_file component patch and modifications for review" -->
<!-- id="0BCAAE5F-F186-4956-B0EE-608CA82C207F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="453d39990803270512q5ba47ffieae79d7d69bd9d3_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-31 07:57:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3569.php">Terry Dontje: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>Previous message:</strong> <a href="3567.php">Jeff Squyres: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>In reply to:</strong> <a href="3549.php">Lenny Verkhovsky: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3543.php">Jeff Squyres: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, I missed this mail.
<br>
<p>IIRC, the verbosity level for stream 0 is 0.  It probably would not be  
<br>
good to increase it; many places in the code use output stream 0.
<br>
<p>Perhaps you could make a new stream with a different verbosity level  
<br>
to do what you want...?  See the docs in opal/util/output.h.
<br>
<p><p>On Mar 27, 2008, at 8:12 AM, Lenny Verkhovsky wrote:
<br>
<span class="quotelev1">&gt; NO, just tried to see some printouts during the run,
</span><br>
<span class="quotelev1">&gt; I use in the code
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opal_output_verbose(0, 0,&quot;LNY100 opal_paffinity_base_slot_list_set  
</span><br>
<span class="quotelev1">&gt; ver=%d &quot;,0);
</span><br>
<span class="quotelev1">&gt; opal_output_verbose(1, 0,&quot;LNY101 opal_paffinity_base_slot_list_set  
</span><br>
<span class="quotelev1">&gt; ver=%d &quot;,1);
</span><br>
<span class="quotelev1">&gt; OPAL_OUTPUT_VERBOSE((1, 0,&quot;VERBOSE LNY102  
</span><br>
<span class="quotelev1">&gt; opal_paffinity_base_slot_list_set ver=%d &quot;,1));
</span><br>
<span class="quotelev1">&gt; but all I see is the first line ( since I put level 0)
</span><br>
<span class="quotelev1">&gt; I suppose that to see the second line I must configure with --enable- 
</span><br>
<span class="quotelev1">&gt; debug, but this is not working for me either.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Mar 27, 2008 at 2:02 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Are you using BTL_OUTPUT or something else from btl_base_error.h?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 27, 2008, at 7:49 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; thanks for the comments. I will definetly implement all of them and
</span><br>
<span class="quotelev2">&gt; &gt; commit the code as soon as I finished.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Also I experience few problems with using opal_verbose_output,
</span><br>
<span class="quotelev2">&gt; &gt; either there is a bugs or I am doing something wrong.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /home/USERS/lenny/OMPI_ORTE_DEBUG/bin/mpirun -mca mca_verbose 0 -mca
</span><br>
<span class="quotelev2">&gt; &gt; paffinity_base_verbose 1 --byslot -np 2 -hostfile hostfile -mca
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_max_lmc 1  -mca opal_paffinity_alone 1 -mca
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_verbose 1  /home/USERS/lenny/TESTS/ORTE/mpi_p01_debug - 
</span><br>
<span class="quotelev1">&gt; t lt
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /home/USERS/lenny/TESTS/ORTE/mpi_p01_debug: symbol lookup error: /
</span><br>
<span class="quotelev2">&gt; &gt; home/USERS/lenny/OMPI_ORTE_DEBUG//lib/openmpi/mca_btl_openib.so:
</span><br>
<span class="quotelev2">&gt; &gt; undefined symbol: mca_btl_base_out
</span><br>
<span class="quotelev2">&gt; &gt; /home/USERS/lenny/TESTS/ORTE/mpi_p01_debug: symbol lookup error: /
</span><br>
<span class="quotelev2">&gt; &gt; home/USERS/lenny/OMPI_ORTE_DEBUG//lib/openmpi/mca_btl_openib.so:
</span><br>
<span class="quotelev2">&gt; &gt; undefined symbol: mca_btl_base_out
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpirun has exited due to process rank 1 with PID 5896 on
</span><br>
<span class="quotelev2">&gt; &gt; node witch17 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev2">&gt; &gt; have caused other processes in the application to be
</span><br>
<span class="quotelev2">&gt; &gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Mar 26, 2008 at 2:50 PM, Ralph H Castain &lt;rhc_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I would tend to echo Tim's suggestions. I note that you do lookup
</span><br>
<span class="quotelev2">&gt; &gt; that opal
</span><br>
<span class="quotelev2">&gt; &gt; mca param in orte as well. I know you sent me a note about that off-
</span><br>
<span class="quotelev2">&gt; &gt; list - I
</span><br>
<span class="quotelev2">&gt; &gt; apologize for not getting to it yet, but was swamped yesterday.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think the solution suggested in #1 below is the right approach.
</span><br>
<span class="quotelev2">&gt; &gt; Looking up
</span><br>
<span class="quotelev2">&gt; &gt; opal params in orte or ompi is probably not a good idea. We have had
</span><br>
<span class="quotelev2">&gt; &gt; problems in the past where params were looked up in multiple  
</span><br>
<span class="quotelev1">&gt; places as
</span><br>
<span class="quotelev2">&gt; &gt; people -do- sometimes change the names (ahem...).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Also, I would suggest using the macro version of verbose
</span><br>
<span class="quotelev2">&gt; &gt; OPAL_OUTPUT_VERBOSE
</span><br>
<span class="quotelev2">&gt; &gt; so that it compiles out for non-debug builds - up to you. Many of us
</span><br>
<span class="quotelev2">&gt; &gt; use it
</span><br>
<span class="quotelev2">&gt; &gt; as we don't need the output from optimized builds.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Other than that, I think this looks fine. I do truly appreciate the
</span><br>
<span class="quotelev2">&gt; &gt; cleanup
</span><br>
<span class="quotelev2">&gt; &gt; of ompi_mpi_init.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ralph
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 3/26/08 6:09 AM, &quot;Tim Prins&quot; &lt;tprins_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi Lenny,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This looks good. But I have a couple of suggestions (which others
</span><br>
<span class="quotelev2">&gt; &gt; may
</span><br>
<span class="quotelev3">&gt; &gt; &gt; disagree with):
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1. You register an opal mca parameter, but look it up in ompi,
</span><br>
<span class="quotelev2">&gt; &gt; then call
</span><br>
<span class="quotelev3">&gt; &gt; &gt; a opal function with the result. What if you had a function
</span><br>
<span class="quotelev3">&gt; &gt; &gt; opal_paffinity_base_set_slots(long rank) (or some other name, I
</span><br>
<span class="quotelev2">&gt; &gt; don't
</span><br>
<span class="quotelev3">&gt; &gt; &gt; care) which looked up the mca parameter and then setup the slots
</span><br>
<span class="quotelev2">&gt; &gt; as you
</span><br>
<span class="quotelev3">&gt; &gt; &gt; are doing if it is fount. This would make things a bit cleaner  
</span><br>
<span class="quotelev1">&gt; IMHO.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2. the functions in the paffinety base should be prefixed with
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 'opal_paffinity_base_'
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 3. Why was the ompi_debug_flag added? It is not used anywhere.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 4. You probably do not need to add the opal debug flag. There is
</span><br>
<span class="quotelev2">&gt; &gt; already
</span><br>
<span class="quotelev3">&gt; &gt; &gt; a 'paffinity_base_verbose' flag which should suit your purposes
</span><br>
<span class="quotelev2">&gt; &gt; fine. So
</span><br>
<span class="quotelev3">&gt; &gt; &gt; you should just be able to replace all of the conditional output
</span><br>
<span class="quotelev3">&gt; &gt; &gt; statements in paffinity with something like
</span><br>
<span class="quotelev3">&gt; &gt; &gt; opal_output_verbose(10, opal_paffinity_base_output, ...),
</span><br>
<span class="quotelev3">&gt; &gt; &gt; where 10 is the verbosity level number.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Tim
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Hi, all
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Attached patch for modified Rank_File RMAPS component.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 1.    introduced new general purpose debug flags
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       mpi_debug
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       opal_debug
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 2.    introduced new mca parameter opal_paffinity_slot_list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 3.    ompi_mpi_init cleaned from opal paffinity functions
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 4.    opal paffinity functions moved to new file
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; opal/mca/paffinity/base/paffinity_base_service.c
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 5.    rank_file component files were renamed according to prefix
</span><br>
<span class="quotelev2">&gt; &gt; policy
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 6.    global variables renamed as well.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 7.    few bug fixes that were brought during previous  
</span><br>
<span class="quotelev1">&gt; discussions.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 8.    If user defines opal_paffinity_alone and
</span><br>
<span class="quotelev2">&gt; &gt; rmaps_rank_file_path or
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; opal_paffinity_slot_list,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; then he gets a Warning that only opal_paffinity_alone will be  
</span><br>
<span class="quotelev1">&gt; used.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; .
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Best Regards,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Lenny.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3569.php">Terry Dontje: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>Previous message:</strong> <a href="3567.php">Jeff Squyres: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>In reply to:</strong> <a href="3549.php">Lenny Verkhovsky: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3543.php">Jeff Squyres: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
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
