<?
$subject_val = "Re: [OMPI users] LSF launch with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  5 09:25:49 2009" -->
<!-- isoreceived="20090505132549" -->
<!-- sent="Tue, 5 May 2009 15:25:44 +0200" -->
<!-- isosent="20090505132544" -->
<!-- name="Jeroen Kleijer" -->
<!-- email="jeroen.kleijer_at_[hidden]" -->
<!-- subject="Re: [OMPI users] LSF launch with OpenMPI" -->
<!-- id="dad39cd60905050625t5bd7e4e6t5e256d10feaad867_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E8C0F252-0E6A-446A-A570-975BDA2E6F82_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] LSF launch with OpenMPI<br>
<strong>From:</strong> Jeroen Kleijer (<em>jeroen.kleijer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-05 09:25:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9220.php">Eugene Loh: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="9218.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>In reply to:</strong> <a href="9214.php">Jeff Squyres: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9221.php">Jeff Squyres: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="9221.php">Jeff Squyres: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="9257.php">Mehdi Bozzo-Rey: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you wish to submit to lsf using its native commands (bsub) you can do the
<br>
following:
<br>
<p>bsub -q ${QUEUE} -a openmpi -n ${CPUS} &quot;mpirun.lsf  -x PATH -x
<br>
LD_LIBRARY_PATH -x MPI_BUFFER_SIZE ${COMMAND} ${OPTIONS}&quot;
<br>
<p>It should be noted that in this case you don't call OpenMPI's mpirun
<br>
directly but use the mpirun.lsf, a wrapper script provided by LSF. This
<br>
wrapper script takes care of setting the necessary environment variables and
<br>
eventually calls the correct mpirun. (the option &quot;-a openmpi&quot; tells LSF that
<br>
we're using OpenMPI so don't try to autodetect)
<br>
<p>Regards,
<br>
<p>Jeroen Kleijer
<br>
<p>On Tue, May 5, 2009 at 2:23 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On May 5, 2009, at 6:10 AM, Matthieu Brucher wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The first is what the support of LSF by OpenMPI means. When mpirun is
</span><br>
<span class="quotelev2">&gt;&gt; executed, it is an LSF job that is actually ran? Or what does it
</span><br>
<span class="quotelev2">&gt;&gt; imply? I've tried to search on the openmpi website as well as on the
</span><br>
<span class="quotelev2">&gt;&gt; internet, but I couldn't find a clear answer/use case.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; What Terry said is correct.  It means that &quot;mpirun&quot; will use, under the
</span><br>
<span class="quotelev1">&gt; covers, the &quot;native&quot; launching mechanism of LSF to launch jobs (vs., say,
</span><br>
<span class="quotelev1">&gt; rsh or ssh).  It'll also discover the hosts to use for this job without the
</span><br>
<span class="quotelev1">&gt; use of a hostfile -- it'll query LSF directly to see what hosts it should
</span><br>
<span class="quotelev1">&gt; use.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My second question is about the LSF detection. lsf.h is detected, but
</span><br>
<span class="quotelev2">&gt;&gt; when lsb_launch is searched for ion libbat.so, it fails because
</span><br>
<span class="quotelev2">&gt;&gt; parse_time and parse_time_ex are not found. Is there a way to add
</span><br>
<span class="quotelev2">&gt;&gt; additional lsf libraries so that the search can be done?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you send all the data shown here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9219/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9220.php">Eugene Loh: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="9218.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>In reply to:</strong> <a href="9214.php">Jeff Squyres: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9221.php">Jeff Squyres: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="9221.php">Jeff Squyres: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="9257.php">Mehdi Bozzo-Rey: "Re: [OMPI users] LSF launch with OpenMPI"</a>
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
