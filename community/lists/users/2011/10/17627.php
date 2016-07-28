<?
$subject_val = "Re: [OMPI users] Changing plm_rsh_agent system wide";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 26 10:51:18 2011" -->
<!-- isoreceived="20111026145118" -->
<!-- sent="Wed, 26 Oct 2011 10:51:06 -0400" -->
<!-- isosent="20111026145106" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Changing plm_rsh_agent system wide" -->
<!-- id="4EA81E5A.3030606_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-26 10:51:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17628.php">Patrick Begou: "Re: [OMPI users] Changing plm_rsh_agent system wide"</a>
<li><strong>Previous message:</strong> <a href="17626.php">TERRY DONTJE: "Re: [OMPI users] Changing plm_rsh_agent system wide"</a>
<li><strong>In reply to:</strong> <a href="17625.php">Ralph Castain: "Re: [OMPI users] Changing plm_rsh_agent system wide"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17628.php">Patrick Begou: "Re: [OMPI users] Changing plm_rsh_agent system wide"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry please disregard my reply to this email.
<br>
<p>:-)
<br>
<p>--td
<br>
<p>On 10/26/2011 10:44 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Did the version you are running get installed in /usr? Sounds like you are picking up a different version when running a command - i.e., that your PATH is finding a different installation than the one in /usr.
</span><br>
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
<p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17627/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-17627/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17628.php">Patrick Begou: "Re: [OMPI users] Changing plm_rsh_agent system wide"</a>
<li><strong>Previous message:</strong> <a href="17626.php">TERRY DONTJE: "Re: [OMPI users] Changing plm_rsh_agent system wide"</a>
<li><strong>In reply to:</strong> <a href="17625.php">Ralph Castain: "Re: [OMPI users] Changing plm_rsh_agent system wide"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17628.php">Patrick Begou: "Re: [OMPI users] Changing plm_rsh_agent system wide"</a>
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
