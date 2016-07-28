<?
$subject_val = "Re: [OMPI users] TotalView Memory debugging and OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 16 14:45:57 2011" -->
<!-- isoreceived="20110516184557" -->
<!-- sent="Mon, 16 May 2011 14:45:50 -0400" -->
<!-- isosent="20110516184550" -->
<!-- name="Peter Thompson" -->
<!-- email="peter.thompson_at_[hidden]" -->
<!-- subject="Re: [OMPI users] TotalView Memory debugging and OpenMPI" -->
<!-- id="4DD170DE.5080507_at_roguewave.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EA04E3BD-FB13-4DAF-ACB4-5B0DF2A6DDBE_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] TotalView Memory debugging and OpenMPI<br>
<strong>From:</strong> Peter Thompson (<em>peter.thompson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-16 14:45:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16549.php">Ralph Castain: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<li><strong>Previous message:</strong> <a href="16547.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<li><strong>In reply to:</strong> <a href="16517.php">Ralph Castain: "Re: [OMPI users] TotalView Memory debugging and OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16550.php">Ralph Castain: "Re: [OMPI users] TotalView Memory debugging and OpenMPI"</a>
<li><strong>Reply:</strong> <a href="16550.php">Ralph Castain: "Re: [OMPI users] TotalView Memory debugging and OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>We've had a number of user complaints about this.   Since it seems on 
<br>
the face of it that it is a debugger issue, it may have not made it's 
<br>
way back here.  Is your objection that the patch basically aborts if it 
<br>
gets a bad value?   I could understand that being a concern.   Of 
<br>
course, it aborts on TotalView now if we attempt to move forward without 
<br>
this patch.
<br>
<p>I've passed your comment back to the engineer, with a suspicion about 
<br>
the concerns about the abort, but if you have other objections, let me know.
<br>
<p>Cheers,
<br>
PeterT
<br>
<p><p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; That would be a problem, I fear. We need to push those envars into the environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there some particular problem causing what you see? We have no other reports of this issue, and orterun has had that code forever.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent from my iPad
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 11, 2011, at 2:05 PM, Peter Thompson &lt;peter.thompson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; We've gotten a few reports of problems with memory debugging when using OpenMPI under TotalView.  Usually, TotalView will attach tot he processes started after an MPI_Init.  However in the case where memory debugging is enabled, things seemed to run away or fail.   My analysis showed that we had a number of core files left over from the attempt, and all were mpirun (or orterun) cores.   It seemed to be a regression on our part, since testing seemed to indicate this worked okay before TotalView 8.9.0-0, so I filed an internal bug and passed it to engineering.   After giving our engineer a brief tutorial on how to build a debug version of OpenMPI, he found what appears to be a problem in the code for orterun.c.   He's made a slight change that fixes the issue in 1.4.2, 1.4.3, 1.4.4rc2 and 1.5.3, those being the versions he's tested with so far.    He doesn't subscribe to this list that I know of, so I offered to pass this by the group.   Of course, I'm not sure if this is exactly the right place to submit p</span><br>
atches, but I'm sure you'd tell me where to put it if I'm in the wrong here.   It's a short patch, so I'll cut and paste it, and attach as well, since cut and paste can do weird things to formatting.
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Credit goes to Ariel Burton for this patch.  Of course he used TotalVIew to find this ;-)  It shows up if you do 'mpirun -tv -np 4 ./foo'   or 'totalview mpirun -a -np 4 ./foo'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; PeterT
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; more ~/patches/anbs-patch
</span><br>
<span class="quotelev2">&gt;&gt; *** orte/tools/orterun/orterun.c        2010-04-13 13:30:34.000000000 -0400
</span><br>
<span class="quotelev2">&gt;&gt; --- /home/anb/packages/openmpi-1.4.2/linux-x8664-iwashi/installation/bin/../../.
</span><br>
<span class="quotelev2">&gt;&gt; ./src/openmpi-1.4.2/orte/tools/orterun/orterun.c        2011-05-09 20:28:16.5881
</span><br>
<span class="quotelev2">&gt;&gt; 83000 -0400
</span><br>
<span class="quotelev2">&gt;&gt; ***************
</span><br>
<span class="quotelev2">&gt;&gt; *** 1578,1588 ****
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;     if (NULL != env) {
</span><br>
<span class="quotelev2">&gt;&gt;         size1 = opal_argv_count(env);
</span><br>
<span class="quotelev2">&gt;&gt;         for (j = 0; j &lt; size1; ++j) {
</span><br>
<span class="quotelev2">&gt;&gt; !             putenv(env[j]);
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;     /* All done */
</span><br>
<span class="quotelev2">&gt;&gt; --- 1578,1600 ----
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;     if (NULL != env) {
</span><br>
<span class="quotelev2">&gt;&gt;         size1 = opal_argv_count(env);
</span><br>
<span class="quotelev2">&gt;&gt;         for (j = 0; j &lt; size1; ++j) {
</span><br>
<span class="quotelev2">&gt;&gt; !             /* Use-after-Free error possible here.  putenv does not copy
</span><br>
<span class="quotelev2">&gt;&gt; !                the string passed to it, and instead stores only the pointer.
</span><br>
<span class="quotelev2">&gt;&gt; !                env[j] may be freed later, in which case the pointer
</span><br>
<span class="quotelev2">&gt;&gt; !                in environ will now be left dangling into a deallocated
</span><br>
<span class="quotelev2">&gt;&gt; !                region.
</span><br>
<span class="quotelev2">&gt;&gt; !                So we make a copy of the variable.
</span><br>
<span class="quotelev2">&gt;&gt; !             */
</span><br>
<span class="quotelev2">&gt;&gt; !             char *s = strdup(env[j]);
</span><br>
<span class="quotelev2">&gt;&gt; !
</span><br>
<span class="quotelev2">&gt;&gt; !             if (NULL == s) {
</span><br>
<span class="quotelev2">&gt;&gt; !                 return OPAL_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev2">&gt;&gt; !             }
</span><br>
<span class="quotelev2">&gt;&gt; !             putenv(s);
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;     /* All done */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *** orte/tools/orterun/orterun.c    2010-04-13 13:30:34.000000000 -0400
</span><br>
<span class="quotelev2">&gt;&gt; --- /home/anb/packages/openmpi-1.4.2/linux-x8664-iwashi/installation/bin/../../../src/openmpi-1.4.2/orte/tools/orterun/orterun.c    2011-05-09 20:28:16.588183000 -0400
</span><br>
<span class="quotelev2">&gt;&gt; ***************
</span><br>
<span class="quotelev2">&gt;&gt; *** 1578,1588 ****
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      if (NULL != env) {
</span><br>
<span class="quotelev2">&gt;&gt;          size1 = opal_argv_count(env);
</span><br>
<span class="quotelev2">&gt;&gt;          for (j = 0; j &lt; size1; ++j) {
</span><br>
<span class="quotelev2">&gt;&gt; !             putenv(env[j]);
</span><br>
<span class="quotelev2">&gt;&gt;          }
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      /* All done */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --- 1578,1600 ----
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      if (NULL != env) {
</span><br>
<span class="quotelev2">&gt;&gt;          size1 = opal_argv_count(env);
</span><br>
<span class="quotelev2">&gt;&gt;          for (j = 0; j &lt; size1; ++j) {
</span><br>
<span class="quotelev2">&gt;&gt; !             /* Use-after-Free error possible here.  putenv does not copy
</span><br>
<span class="quotelev2">&gt;&gt; !                the string passed to it, and instead stores only the pointer.
</span><br>
<span class="quotelev2">&gt;&gt; !                env[j] may be freed later, in which case the pointer
</span><br>
<span class="quotelev2">&gt;&gt; !                in environ will now be left dangling into a deallocated
</span><br>
<span class="quotelev2">&gt;&gt; !                region.
</span><br>
<span class="quotelev2">&gt;&gt; !                So we make a copy of the variable.
</span><br>
<span class="quotelev2">&gt;&gt; !             */
</span><br>
<span class="quotelev2">&gt;&gt; !             char *s = strdup(env[j]);
</span><br>
<span class="quotelev2">&gt;&gt; ! 
</span><br>
<span class="quotelev2">&gt;&gt; !             if (NULL == s) {
</span><br>
<span class="quotelev2">&gt;&gt; !                 return OPAL_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev2">&gt;&gt; !             }
</span><br>
<span class="quotelev2">&gt;&gt; !             putenv(s);
</span><br>
<span class="quotelev2">&gt;&gt;          }
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      /* All done */
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
<span class="quotelev2">&gt;&gt;     
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16549.php">Ralph Castain: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<li><strong>Previous message:</strong> <a href="16547.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<li><strong>In reply to:</strong> <a href="16517.php">Ralph Castain: "Re: [OMPI users] TotalView Memory debugging and OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16550.php">Ralph Castain: "Re: [OMPI users] TotalView Memory debugging and OpenMPI"</a>
<li><strong>Reply:</strong> <a href="16550.php">Ralph Castain: "Re: [OMPI users] TotalView Memory debugging and OpenMPI"</a>
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
