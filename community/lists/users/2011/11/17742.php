<?
$subject_val = "Re: [OMPI users] wiki and &quot;man mpirun&quot; odds, and a question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 10 08:02:01 2011" -->
<!-- isoreceived="20111110130201" -->
<!-- sent="Thu, 10 Nov 2011 06:01:53 -0700" -->
<!-- isosent="20111110130153" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] wiki and &amp;quot;man mpirun&amp;quot; odds, and a question" -->
<!-- id="F37465C4-DAE4-4231-AE2F-98B2803DE8DF_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4EBBAF58.5010506_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] wiki and &quot;man mpirun&quot; odds, and a question<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-10 08:01:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17743.php">Ralph Castain: "Re: [OMPI users] Process Migration"</a>
<li><strong>Previous message:</strong> <a href="17741.php">Mudassar Majeed: "[OMPI users] Process Migration"</a>
<li><strong>In reply to:</strong> <a href="17740.php">Paul Kapinos: "[OMPI users] wiki and &quot;man mpirun&quot; odds, and a question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17748.php">Prentice Bisbal: "Re: [OMPI users] wiki and &quot;man mpirun&quot; odds, and a question"</a>
<li><strong>Reply:</strong> <a href="17748.php">Prentice Bisbal: "Re: [OMPI users] wiki and &quot;man mpirun&quot; odds, and a question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure where the FAQ got its information, but it has always been one param per -x option.
<br>
<p>I'm afraid there isn't any envar to support the setting of multiple -x options. We didn't expect someone to forward very many, if any, so we didn't create that capability. It wouldn't be too hard to convert it to an mca param, though, so you could add such options to your mca param file, if that would help.
<br>
<p><p>On Nov 10, 2011, at 4:02 AM, Paul Kapinos wrote:
<br>
<p><span class="quotelev1">&gt; Hi folks,
</span><br>
<span class="quotelev1">&gt; I.  looked for ways to tell to &quot;mpiexec&quot; to forward some environment variables, I saw a mismatch:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#mpirun-options">http://www.open-mpi.org/faq/?category=running#mpirun-options</a>
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; --x &lt;env-variable-names&gt;: A comma-delimited list of environment variables to export to the parallel application.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; (Open MPI/1.5.3)
</span><br>
<span class="quotelev1">&gt; $ man mpirun
</span><br>
<span class="quotelev1">&gt;       -x &lt;env&gt;
</span><br>
<span class="quotelev1">&gt;              Export  the  specified environment variables to the remote nodes before executing the program.  Only one environment variable can
</span><br>
<span class="quotelev1">&gt;                                    ^^^^^^^^^^^
</span><br>
<span class="quotelev1">&gt; be  specified per -x option.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, either the info is outdated somewhre, or -x and --x have different meaning - but then there is a lack of info, too :o)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe you could update the Wiki and/or the man page?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; II. Now the question. Defaultly no non-OpenMPI environmet variables are exported to the parallel application, AFAIK.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With -x option of mpiexec it is possible to export one (or a list of, see below) environment variable. But, it's a bit tedious to type a [long] list of variables.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there someone envvar, by setting which to a list of names of other envvars the same effect could be achieved as by setting -x on command line of mpirun?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best wishes
</span><br>
<span class="quotelev1">&gt; Paul Kapinos
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt; Tel: +49 241/80-24915
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17743.php">Ralph Castain: "Re: [OMPI users] Process Migration"</a>
<li><strong>Previous message:</strong> <a href="17741.php">Mudassar Majeed: "[OMPI users] Process Migration"</a>
<li><strong>In reply to:</strong> <a href="17740.php">Paul Kapinos: "[OMPI users] wiki and &quot;man mpirun&quot; odds, and a question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17748.php">Prentice Bisbal: "Re: [OMPI users] wiki and &quot;man mpirun&quot; odds, and a question"</a>
<li><strong>Reply:</strong> <a href="17748.php">Prentice Bisbal: "Re: [OMPI users] wiki and &quot;man mpirun&quot; odds, and a question"</a>
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
