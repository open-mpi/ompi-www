<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 26 18:02:32 2013" -->
<!-- isoreceived="20131126230232" -->
<!-- sent="Tue, 26 Nov 2013 16:02:31 -0700" -->
<!-- isosent="20131126230231" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?" -->
<!-- id="20131126230231.GG55796_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CEBA5CFD.461C8%knteran_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-26 18:02:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23079.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Previous message:</strong> <a href="23077.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>In reply to:</strong> <a href="23077.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23079.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Reply:</strong> <a href="23079.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, that sheds a little more light on the situation. For some reason it sees 2 nodes
<br>
apparently with one slot each. One more set out outputs would be helpful. Please run
<br>
with -mca ras_base_verbose 100 . That way I can see what was read from alps.
<br>
<p>-Nathan
<br>
<p>On Tue, Nov 26, 2013 at 10:14:11PM +0000, Teranishi, Keita wrote:
<br>
<span class="quotelev1">&gt; Nathan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am hoping these files would help you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Keita
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 11/26/13 1:41 PM, &quot;Nathan Hjelm&quot; &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;Well, no hints as to the error there. Looks identical to the output on my
</span><br>
<span class="quotelev2">&gt; &gt;XE-6. How
</span><br>
<span class="quotelev2">&gt; &gt;about setting -mca rmaps_base_verbose 100 . See what is going on with the
</span><br>
<span class="quotelev2">&gt; &gt;mapper.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;-Nathan Hjelm
</span><br>
<span class="quotelev2">&gt; &gt;Application Readiness, HPC-5, LANL
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;On Tue, Nov 26, 2013 at 09:33:20PM +0000, Teranishi, Keita wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Nathan,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Please see the attached obtained from two cases (-np 2 and -np 4).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;-------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;--
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Keita Teranishi
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Principal Member of Technical Staff
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Scalable Modeling and Analysis Systems
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sandia National Laboratories
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Livermore, CA 94551
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +1 (925) 294-3738
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
<span class="quotelev3">&gt; &gt;&gt; On 11/26/13 1:26 PM, &quot;Nathan Hjelm&quot; &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;Seems like something is going wrong with processor binding. Can you run
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;with
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;-mca plm_base_verbose 100 . Might shed some light on why it thinks
</span><br>
<span class="quotelev3">&gt; &gt;&gt;there
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;are
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;not enough slots.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;-Nathan Hjelm
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;Application Readiness, HPC-5, LANL
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;On Tue, Nov 26, 2013 at 09:18:14PM +0000, Teranishi, Keita wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Nathan,
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Now I remove strip_prefix stuff, which was applied to the other
</span><br>
<span class="quotelev3">&gt; &gt;&gt;versions
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; of OpenMPI.  
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; I still have the same problem with msubrun command.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; knteran_at_mzlogin01:~&gt; msub -lnodes=2:ppn=16 -I
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; qsub: waiting for job 7754058.sdb to start
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; qsub: job 7754058.sdb ready
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; knteran_at_mzlogin01:~&gt; cd test-openmpi/
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; knteran_at_mzlogin01:~/test-openmpi&gt; !mp
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; mpicc cpi.c -o cpi
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; knteran_at_mzlogin01:~/test-openmpi&gt; mpirun -np 4 ./cpi
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;-----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;--
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;-
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; There are not enough slots available in the system to satisfy the 4
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;slots
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; that were requested by the application:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;   ./cpi
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Either request fewer slots for your application, or make more slots
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; available
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; for use.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;-----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;--
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;-
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; I set PATH and LD_LIBRARY_PATH to match with my own OpenMPI
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;installation.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; knteran_at_mzlogin01:~/test-openmpi&gt; which mpirun
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; /home/knteran/openmpi/bin/mpirun
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;-----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;--
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;--
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; --
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Keita Teranishi
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Principal Member of Technical Staff
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Scalable Modeling and Analysis Systems
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Livermore, CA 94551
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; +1 (925) 294-3738
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; On 11/26/13 12:52 PM, &quot;Nathan Hjelm&quot; &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;Weird. That is the same configuration we have deployed on Cielito
</span><br>
<span class="quotelev3">&gt; &gt;&gt;and
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;Cielo. Does
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;it work under an msub allocation?
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;BTW, with that configuration you should not set
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;plm_base_strip_prefix_from_node_names
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;to 0. That will confuse orte since the node hostname will not match
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;what
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;was
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;supplied by alps.
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;-Nathan
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;On Tue, Nov 26, 2013 at 08:38:51PM +0000, Teranishi, Keita wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; Nathan,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; (Please forget about the segfault. It was my mistake).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; I use OpenMPI-1.7.2 (build with gcc-4.7.2) to run the program.  I
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;used
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; contrib/platform/lanl/cray_xe6/optimized_lustre and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; --enable-mpirun-prefix-by-default for configuration.  As I said,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;it
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;works
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; fine with aprun, but fails with mpirun/mpiexec.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; knteran_at_mzlogin01:~/test-openmpi&gt; ~/openmpi/bin/mpirun -np 4
</span><br>
<span class="quotelev3">&gt; &gt;&gt;./a.out
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;--
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt;&gt;&gt;--
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;-
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; There are not enough slots available in the system to satisfy the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;4
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;slots
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; that were requested by the application:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;   ./a.out
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; Either request fewer slots for your application, or make more
</span><br>
<span class="quotelev3">&gt; &gt;&gt;slots
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; available
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; for use.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;--
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt;&gt;&gt;--
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;--
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; -
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;--
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt;&gt;&gt;--
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;--
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; Keita Teranishi
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; Principal Member of Technical Staff
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; Scalable Modeling and Analysis Systems
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; Sandia National Laboratories
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; Livermore, CA 94551
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; +1 (925) 294-3738
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; On 11/25/13 12:55 PM, &quot;Nathan Hjelm&quot; &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;Ok, that should have worked. I just double-checked it to me sure.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;ct-login1:/lscratch1/hjelmn/ibm/collective hjelmn$ mpirun -np 32
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;./bcast
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;App launch reported: 17 (out of 3) daemons - 0 (out of 32) procs
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;ct-login1:/lscratch1/hjelmn/ibm/collective hjelmn$
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;How did you configure Open MPI and what version are you using?
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;-Nathan
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;On Mon, Nov 25, 2013 at 08:48:09PM +0000, Teranishi, Keita wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Hi Natan,
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; I tried qsub option you
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; mpirun -np 4  --mca plm_base_strip_prefix_from_node_names= 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;./cpi
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;-------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;--
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;--
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;-
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; There are not enough slots available in the system to satisfy
</span><br>
<span class="quotelev3">&gt; &gt;&gt;the
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;4
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;slots
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; that were requested by the application:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;   ./cpi
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Either request fewer slots for your application, or make more
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;slots
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; available
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; for use.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;-------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;--
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;--
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;-
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Here is I got from aprun
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; aprun  -n 32 ./cpi
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Process 8 of 32 is on nid00011
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Process 5 of 32 is on nid00011
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Process 12 of 32 is on nid00011
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Process 9 of 32 is on nid00011
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Process 11 of 32 is on nid00011
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Process 13 of 32 is on nid00011
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Process 0 of 32 is on nid00011
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Process 6 of 32 is on nid00011
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Process 3 of 32 is on nid00011
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; :
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; :
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Also, I found a strange error in the end of the program
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;(MPI_Finalize?)
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Can you tell me what is wrong with that?
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [nid00010:23511] [ 0] /lib64/libpthread.so.0(+0xf7c0)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;[0x2aaaacbbb7c0]
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [nid00010:23511] [ 1]
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;/home/knteran/openmpi/lib/libmpi.so.0(opal_memory_ptmalloc2_int_fre
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;e+
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;0x
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;57
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;)
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [0x2aaaaaf38ec7]
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [nid00010:23511] [ 2]
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;/home/knteran/openmpi/lib/libmpi.so.0(opal_memory_ptmalloc2_free+0xc3)
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [0x2aaaaaf3b6c3]
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [nid00010:23511] [ 3]
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; /home/knteran/openmpi/lib/libmpi.so.0(mca_pml_base_close+0xb2)
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [0x2aaaaae717b2]
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [nid00010:23511] [ 4]
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; /home/knteran/openmpi/lib/libmpi.so.0(ompi_mpi_finalize+0x333)
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [0x2aaaaad7be23]
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [nid00010:23511] [ 5] ./cpi() [0x400e23]
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [nid00010:23511] [ 6] /lib64/libc.so.6(__libc_start_main+0xe6)
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [0x2aaaacde7c36]
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [nid00010:23511] [ 7] ./cpi() [0x400b09]
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;-------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;--
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;--
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;--
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; --
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Keita Teranishi
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Principal Member of Technical Staff
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Scalable Modeling and Analysis Systems
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Livermore, CA 94551
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; +1 (925) 294-3738
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; On 11/25/13 12:28 PM, &quot;Nathan Hjelm&quot; &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;Just talked with our local Cray rep. Sounds like that torque
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;syntax
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;is
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;broken. You can continue
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;to use qsub (though qsub use is strongly discouraged) if you
</span><br>
<span class="quotelev3">&gt; &gt;&gt;use
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;the
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;msub
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;options.
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;Ex:
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;qsub -lnodes=2:ppn=16
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;Works.
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;-Nathan
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;On Mon, Nov 25, 2013 at 01:11:29PM -0700, Nathan Hjelm wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Hmm, this seems like either a bug in qsub (torque is full of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;serious
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;bugs) or a bug
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; in alps. I got an allocation using that command and alps
</span><br>
<span class="quotelev3">&gt; &gt;&gt;only
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;sees 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;node:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: Trying ALPS
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;configuration file: &quot;/etc/sysconfig/alps&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: parser_ini
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: Trying ALPS
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;configuration file: &quot;/etc/alps.conf&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;parser_separated_columns
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: Located
</span><br>
<span class="quotelev3">&gt; &gt;&gt;ALPS
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;scheduler
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;file: &quot;/ufs/alps_shared/appinfo&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;ras:alps:orte_ras_alps_get_appinfo_attempts: 10
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: begin
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;processing
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;appinfo file
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: file
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;/ufs/alps_shared/appinfo read
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: 47 entries
</span><br>
<span class="quotelev3">&gt; &gt;&gt;in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;file
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3492 - myId 3668
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3492 - myId 3668
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3541 - myId 3668
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3541 - myId 3668
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3560 - myId 3668
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3560 - myId 3668
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3561 - myId 3668
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3561 - myId 3668
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3566 - myId 3668
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3566 - myId 3668
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3573 - myId 3668
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3573 - myId 3668
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3588 - myId 3668
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3588 - myId 3668
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3598 - myId 3668
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3598 - myId 3668
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3599 - myId 3668
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3599 - myId 3668
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3622 - myId 3668
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3622 - myId 3668
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3635 - myId 3668
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3635 - myId 3668
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3640 - myId 3668
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3640 - myId 3668
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3641 - myId 3668
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3641 - myId 3668
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3642 - myId 3668
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3642 - myId 3668
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3647 - myId 3668
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3647 - myId 3668
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3651 - myId 3668
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3651 - myId 3668
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3653 - myId 3668
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3653 - myId 3668
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3659 - myId 3668
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3659 - myId 3668
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3662 - myId 3668
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3662 - myId 3668
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3665 - myId 3668
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3665 - myId 3668
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: read data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3668 - myId 3668
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:read_appinfo(modern):
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;processing
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;NID 29 with 16 slots
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate: success
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] [[15798,0],0]
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;ras:base:node_insert
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;inserting 1 nodes
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] [[15798,0],0]
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;ras:base:node_insert
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;node 29
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; ======================   ALLOCATED NODES
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;======================
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;  Data for node: 29	Num slots: 16	Max slots: 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;=================================================================
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Torque also shows only one node with 16 PPN:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; $ env | grep PBS
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; ...
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; PBS_NUM_PPN=16
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; $ cat /var/spool/torque/aux//915289.sdb
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; login1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Which is wrong! I will have to ask Cray what is going on
</span><br>
<span class="quotelev3">&gt; &gt;&gt;here.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;I
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;recommend you switch to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; msub to get an allocation. Moab has fewer bugs. I can't even
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;get
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;aprun
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;to work:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; $ aprun -n 2 -N 1 hostname
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; apsched: claim exceeds reservation's node-count
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; $ aprun -n 32 hostname
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; apsched: claim exceeds reservation's node-count
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; To get an interactive session 2 nodes with 16 ppn on each
</span><br>
<span class="quotelev3">&gt; &gt;&gt;run:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; msub -I -lnodes=2:ppn=16
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Open MPI should then work correctly.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; -Nathan Hjelm
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; HPC-5, LANL
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; On Sat, Nov 23, 2013 at 10:13:26PM +0000, Teranishi, Keita
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;    Hi,
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;    I installed OpenMPI on our small XE6 using the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;configure
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;options
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;under
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;    /contrib directory.  It appears it is working fine,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;but it
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;ignores
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;MCA
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;    parameters (set in env var).  So I switched to mpirun
</span><br>
<span class="quotelev3">&gt; &gt;&gt;(in
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;OpenMPI)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;and it
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;    can handle MCA parameters somehow.  However,  mpirun
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;fails to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;allocate
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;    process by cores.  For example, I allocated 32 cores
</span><br>
<span class="quotelev3">&gt; &gt;&gt;(on 2
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;nodes)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;by &quot;qsub
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;    -lmppwidth=32 -lmppnppn=16&quot;, mpirun recognizes it as 2
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;slots.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;Is it
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;    possible to mpirun to handle mluticore nodes of XE6
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;properly
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;or
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;there
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;    any options to handle MCA parameters for aprun?
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;    Regards,
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;   
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;-----------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;--
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;--
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;----
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;    Keita Teranishi
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;    Principal Member of Technical Staff
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;    Scalable Modeling and Analysis Systems
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;    Sandia National Laboratories
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;    Livermore, CA 94551
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;    +1 (925) 294-3738
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23078/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23079.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Previous message:</strong> <a href="23077.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>In reply to:</strong> <a href="23077.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23079.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Reply:</strong> <a href="23079.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
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
