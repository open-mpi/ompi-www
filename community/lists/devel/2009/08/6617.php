<?
$subject_val = "Re: [OMPI devel] Error: system limit exceeded on number of pipes that can be open";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 13:24:19 2009" -->
<!-- isoreceived="20090811172419" -->
<!-- sent="Tue, 11 Aug 2009 20:24:13 +0300" -->
<!-- isosent="20090811172413" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Error: system limit exceeded on number of pipes that can be open" -->
<!-- id="b20b52800908111024g73cffbfdi302afe75b1c57a52_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A81A551.4090005_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Error: system limit exceeded on number of pipes that can be open<br>
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-11 13:24:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6618.php">Rainer Keller: "[OMPI devel] RFC: PML/CM priority"</a>
<li><strong>Previous message:</strong> <a href="6616.php">Eugene Loh: "Re: [OMPI devel] Error: system limit exceeded on number of pipes that	can be open"</a>
<li><strong>In reply to:</strong> <a href="6616.php">Eugene Loh: "Re: [OMPI devel] Error: system limit exceeded on number of pipes that	can be open"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
thanks a lot!
<br>
<p><p><p>On Tue, Aug 11, 2009 at 8:07 PM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;   Mike Dubman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello guys,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When executing following command with mtt and ompi 1.3.3:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --host witch15,witch15,witch15,witch15,witch16,witch16,witch16,witch16,witch17,witch17,witch17,witch17,witch18,witch18,witch18,witch18,witch19,witch19,witch19,witch19 -np 20   --mca btl_openib_use_srq 1  --mca btl self,sm,openib
</span><br>
<span class="quotelev1">&gt; ~mtt/mtt-scratch/20090809140816_dellix8_11812/installs/mnum/tests/ibm/ibm/dynamic/loop_spawn
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; getting following errors:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #0 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #20 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #40 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #60 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #80 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #100 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #120 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #140 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #160 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #180 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #200 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #220 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #240 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #260 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #280 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #300 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #320 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #340 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #360 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #380 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #400 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #420 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #440 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #460 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #480 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #500 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #520 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #540 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #560 return : 0
</span><br>
<span class="quotelev1">&gt; parent: MPI_Comm_spawn #580 return : 0
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun was unable to launch the specified application as it encountered an error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Error: system limit exceeded on number of pipes that can be open
</span><br>
<span class="quotelev1">&gt; Node: witch19
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; when attempting to start process rank 0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This can be resolved by setting the mca parameter opal_set_max_sys_limits to 1,
</span><br>
<span class="quotelev1">&gt; increasing your limit descriptor setting (using limit or ulimit commands),
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; asking the system administrator for that node to increase the system limit, or
</span><br>
<span class="quotelev1">&gt; by rearranging your processes to place fewer of them on that node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you know what OS params should be changed in order to resolve it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I thought this error message just got a makeover.  So, if it's
</span><br>
<span class="quotelev1">&gt; insufficient, it should probably be improved further.  The message suggests:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) setting opal_set_max_sys_limits to 1, which seems pretty self
</span><br>
<span class="quotelev1">&gt; explanatory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) increasing descriptor limit using limit or ulimit, which requires a
</span><br>
<span class="quotelev1">&gt; little more OS familiarity
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3) cutting a deal with sysadmin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4) rearranging processes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, which part are you asking about?  #2?  If so, try &quot;man limit&quot; and look
</span><br>
<span class="quotelev1">&gt; at the places where you see anything about &quot;descriptor[s]&quot;.  Answers depend
</span><br>
<span class="quotelev1">&gt; on the shell you use.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6617/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6618.php">Rainer Keller: "[OMPI devel] RFC: PML/CM priority"</a>
<li><strong>Previous message:</strong> <a href="6616.php">Eugene Loh: "Re: [OMPI devel] Error: system limit exceeded on number of pipes that	can be open"</a>
<li><strong>In reply to:</strong> <a href="6616.php">Eugene Loh: "Re: [OMPI devel] Error: system limit exceeded on number of pipes that	can be open"</a>
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
