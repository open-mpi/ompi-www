<?
$subject_val = "Re: [OMPI users] Changing plm_rsh_agent system wide";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 26 11:57:44 2011" -->
<!-- isoreceived="20111026155744" -->
<!-- sent="Wed, 26 Oct 2011 17:57:54 +0200" -->
<!-- isosent="20111026155754" -->
<!-- name="Patrick Begou" -->
<!-- email="Patrick.Begou_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Changing plm_rsh_agent system wide" -->
<!-- id="4EA82E02.9020107_at_hmg.inpg.fr" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="F188CF99-9A7A-4327-AF9C-51D578CD54C4_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Changing plm_rsh_agent system wide<br>
<strong>From:</strong> Patrick Begou (<em>Patrick.Begou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-26 11:57:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17629.php">Gus Correa: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<li><strong>Previous message:</strong> <a href="17627.php">TERRY DONTJE: "Re: [OMPI users] Changing plm_rsh_agent system wide"</a>
<li><strong>In reply to:</strong> <a href="17625.php">Ralph Castain: "Re: [OMPI users] Changing plm_rsh_agent system wide"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain a &#233;crit :
<br>
<span class="quotelev1">&gt; Did the version you are running get installed in /usr? Sounds like you are picking up a different version when running a command - i.e., that your PATH is finding a different installation than the one in /usr.
</span><br>
<p>Right! I'm using OpenMPI with Rocks Cluster distribution. There is:
<br>
&nbsp;&nbsp;openmpi-1.4-4.el5 rpm installed with
<br>
/usr/lib*/openmpi/1.4-gcc/etc/openmpi-mca-params.conf
<br>
<p>but there is also  rocks-openmpi-1.4.3-1 with
<br>
/opt/openmpi/etc/openmpi-mca-params.conf
<br>
<p>I never notice this double default install of OpenMPI in this linux distribution.
<br>
Thanks a lot for the suggestion, I was fixed on a syntax error in my config...
<br>
<p>Patrick
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 26, 2011, at 3:11 AM, Patrick Begou wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I need to change system wide how OpenMPI launch the jobs on the nodes of my cluster.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Setting:
</span><br>
<span class="quotelev2">&gt;&gt; export OMPI_MCA_plm_rsh_agent=oarsh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; works fine but I would like this config to be the default with OpenMPI. I've read several threads (discussions, FAQ) about this but none of the provided solutions seams to work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have two files:
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/openmpi/1.4-gcc/etc/openmpi-mca-params.conf
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/openmpi/1.4-gcc/etc/openmpi-mca-params.conf
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In these files I've set various flavor of the syntax (only one at a time, and the same in each file of course!):
</span><br>
<span class="quotelev2">&gt;&gt; test 1) plm_rsh_agent = oarsh
</span><br>
<span class="quotelev2">&gt;&gt; test 2) pls_rsh_agent = oarsh
</span><br>
<span class="quotelev2">&gt;&gt; test 3) orte_rsh_agent = oarsh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But each time when I run &quot;ompi_info --param plm rsh&quot; I get:
</span><br>
<span class="quotelev2">&gt;&gt; MCA plm: parameter &quot;plm_rsh_agent&quot; (current value: &quot;ssh : rsh&quot;, data source: default value, synonyms:
</span><br>
<span class="quotelev2">&gt;&gt;                   pls_rsh_agent)
</span><br>
<span class="quotelev2">&gt;&gt;                   The command used to launch executables on remote nodes (typically either &quot;ssh&quot; or &quot;rsh&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With the exported variable it works fine.
</span><br>
<span class="quotelev2">&gt;&gt; Any suggestion ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The rpm package of my linux Rocks Cluster provides:
</span><br>
<span class="quotelev2">&gt;&gt;    Package: Open MPI root_at_build-x86-64 Distribution
</span><br>
<span class="quotelev2">&gt;&gt;    Open MPI: 1.4.3
</span><br>
<span class="quotelev2">&gt;&gt;    Open MPI SVN revision: r23834
</span><br>
<span class="quotelev2">&gt;&gt;    Open MPI release date: Oct 05, 2010
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Patrick
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; ===============================================================
</span><br>
<span class="quotelev2">&gt;&gt; |  Equipe M.O.S.T.         | <a href="http://most.hmg.inpg.fr">http://most.hmg.inpg.fr</a>          |
</span><br>
<span class="quotelev2">&gt;&gt; |  Patrick BEGOU           |       ------------               |
</span><br>
<span class="quotelev2">&gt;&gt; |  LEGI                    | mailto:Patrick.Begou_at_[hidden] |
</span><br>
<span class="quotelev2">&gt;&gt; |  BP 53 X                 | Tel 04 76 82 51 35               |
</span><br>
<span class="quotelev2">&gt;&gt; |  38041 GRENOBLE CEDEX    | Fax 04 76 82 52 71               |
</span><br>
<span class="quotelev2">&gt;&gt; ===============================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
===============================================================
|  Equipe M.O.S.T.         | <a href="http://most.hmg.inpg.fr">http://most.hmg.inpg.fr</a>          |
|  Patrick BEGOU           |       ------------               |
|  LEGI                    | mailto:Patrick.Begou_at_[hidden] |
|  BP 53 X                 | Tel 04 76 82 51 35               |
|  38041 GRENOBLE CEDEX    | Fax 04 76 82 52 71               |
===============================================================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17629.php">Gus Correa: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<li><strong>Previous message:</strong> <a href="17627.php">TERRY DONTJE: "Re: [OMPI users] Changing plm_rsh_agent system wide"</a>
<li><strong>In reply to:</strong> <a href="17625.php">Ralph Castain: "Re: [OMPI users] Changing plm_rsh_agent system wide"</a>
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
