<?
$subject_val = "Re: [OMPI users] TotalView Memory debugging and OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 11 17:40:50 2011" -->
<!-- isoreceived="20110511214050" -->
<!-- sent="Wed, 11 May 2011 15:34:06 -0600" -->
<!-- isosent="20110511213406" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] TotalView Memory debugging and OpenMPI" -->
<!-- id="EA04E3BD-FB13-4DAF-ACB4-5B0DF2A6DDBE_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4DCAEBF0.3090000_at_roguewave.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-11 17:34:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16518.php">Marcus R. Epperson: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<li><strong>Previous message:</strong> <a href="16516.php">Ralph Castain: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>In reply to:</strong> <a href="16514.php">Peter Thompson: "[OMPI users] TotalView Memory debugging and OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16548.php">Peter Thompson: "Re: [OMPI users] TotalView Memory debugging and OpenMPI"</a>
<li><strong>Reply:</strong> <a href="16548.php">Peter Thompson: "Re: [OMPI users] TotalView Memory debugging and OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That would be a problem, I fear. We need to push those envars into the environment.
<br>
<p>Is there some particular problem causing what you see? We have no other reports of this issue, and orterun has had that code forever.
<br>
<p><p><p>Sent from my iPad
<br>
<p>On May 11, 2011, at 2:05 PM, Peter Thompson &lt;peter.thompson_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; We've gotten a few reports of problems with memory debugging when using OpenMPI under TotalView.  Usually, TotalView will attach tot he processes started after an MPI_Init.  However in the case where memory debugging is enabled, things seemed to run away or fail.   My analysis showed that we had a number of core files left over from the attempt, and all were mpirun (or orterun) cores.   It seemed to be a regression on our part, since testing seemed to indicate this worked okay before TotalView 8.9.0-0, so I filed an internal bug and passed it to engineering.   After giving our engineer a brief tutorial on how to build a debug version of OpenMPI, he found what appears to be a problem in the code for orterun.c.   He's made a slight change that fixes the issue in 1.4.2, 1.4.3, 1.4.4rc2 and 1.5.3, those being the versions he's tested with so far.    He doesn't subscribe to this list that I know of, so I offered to pass this by the group.   Of course, I'm not sure if this is exactly the right place to submit pa</span><br>
tches, but I'm sure you'd tell me where to put it if I'm in the wrong here.   It's a short patch, so I'll cut and paste it, and attach as well, since cut and paste can do weird things to formatting.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Credit goes to Ariel Burton for this patch.  Of course he used TotalVIew to find this ;-)  It shows up if you do 'mpirun -tv -np 4 ./foo'   or 'totalview mpirun -a -np 4 ./foo'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; PeterT
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; more ~/patches/anbs-patch
</span><br>
<span class="quotelev1">&gt; *** orte/tools/orterun/orterun.c        2010-04-13 13:30:34.000000000 -0400
</span><br>
<span class="quotelev1">&gt; --- /home/anb/packages/openmpi-1.4.2/linux-x8664-iwashi/installation/bin/../../.
</span><br>
<span class="quotelev1">&gt; ./src/openmpi-1.4.2/orte/tools/orterun/orterun.c        2011-05-09 20:28:16.5881
</span><br>
<span class="quotelev1">&gt; 83000 -0400
</span><br>
<span class="quotelev1">&gt; ***************
</span><br>
<span class="quotelev1">&gt; *** 1578,1588 ****
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     if (NULL != env) {
</span><br>
<span class="quotelev1">&gt;         size1 = opal_argv_count(env);
</span><br>
<span class="quotelev1">&gt;         for (j = 0; j &lt; size1; ++j) {
</span><br>
<span class="quotelev1">&gt; !             putenv(env[j]);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     /* All done */
</span><br>
<span class="quotelev1">&gt; --- 1578,1600 ----
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     if (NULL != env) {
</span><br>
<span class="quotelev1">&gt;         size1 = opal_argv_count(env);
</span><br>
<span class="quotelev1">&gt;         for (j = 0; j &lt; size1; ++j) {
</span><br>
<span class="quotelev1">&gt; !             /* Use-after-Free error possible here.  putenv does not copy
</span><br>
<span class="quotelev1">&gt; !                the string passed to it, and instead stores only the pointer.
</span><br>
<span class="quotelev1">&gt; !                env[j] may be freed later, in which case the pointer
</span><br>
<span class="quotelev1">&gt; !                in environ will now be left dangling into a deallocated
</span><br>
<span class="quotelev1">&gt; !                region.
</span><br>
<span class="quotelev1">&gt; !                So we make a copy of the variable.
</span><br>
<span class="quotelev1">&gt; !             */
</span><br>
<span class="quotelev1">&gt; !             char *s = strdup(env[j]);
</span><br>
<span class="quotelev1">&gt; !
</span><br>
<span class="quotelev1">&gt; !             if (NULL == s) {
</span><br>
<span class="quotelev1">&gt; !                 return OPAL_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt; !             }
</span><br>
<span class="quotelev1">&gt; !             putenv(s);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     /* All done */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** orte/tools/orterun/orterun.c    2010-04-13 13:30:34.000000000 -0400
</span><br>
<span class="quotelev1">&gt; --- /home/anb/packages/openmpi-1.4.2/linux-x8664-iwashi/installation/bin/../../../src/openmpi-1.4.2/orte/tools/orterun/orterun.c    2011-05-09 20:28:16.588183000 -0400
</span><br>
<span class="quotelev1">&gt; ***************
</span><br>
<span class="quotelev1">&gt; *** 1578,1588 ****
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      if (NULL != env) {
</span><br>
<span class="quotelev1">&gt;          size1 = opal_argv_count(env);
</span><br>
<span class="quotelev1">&gt;          for (j = 0; j &lt; size1; ++j) {
</span><br>
<span class="quotelev1">&gt; !             putenv(env[j]);
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      /* All done */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- 1578,1600 ----
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      if (NULL != env) {
</span><br>
<span class="quotelev1">&gt;          size1 = opal_argv_count(env);
</span><br>
<span class="quotelev1">&gt;          for (j = 0; j &lt; size1; ++j) {
</span><br>
<span class="quotelev1">&gt; !             /* Use-after-Free error possible here.  putenv does not copy
</span><br>
<span class="quotelev1">&gt; !                the string passed to it, and instead stores only the pointer.
</span><br>
<span class="quotelev1">&gt; !                env[j] may be freed later, in which case the pointer
</span><br>
<span class="quotelev1">&gt; !                in environ will now be left dangling into a deallocated
</span><br>
<span class="quotelev1">&gt; !                region.
</span><br>
<span class="quotelev1">&gt; !                So we make a copy of the variable.
</span><br>
<span class="quotelev1">&gt; !             */
</span><br>
<span class="quotelev1">&gt; !             char *s = strdup(env[j]);
</span><br>
<span class="quotelev1">&gt; ! 
</span><br>
<span class="quotelev1">&gt; !             if (NULL == s) {
</span><br>
<span class="quotelev1">&gt; !                 return OPAL_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt; !             }
</span><br>
<span class="quotelev1">&gt; !             putenv(s);
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      /* All done */
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16518.php">Marcus R. Epperson: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<li><strong>Previous message:</strong> <a href="16516.php">Ralph Castain: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>In reply to:</strong> <a href="16514.php">Peter Thompson: "[OMPI users] TotalView Memory debugging and OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16548.php">Peter Thompson: "Re: [OMPI users] TotalView Memory debugging and OpenMPI"</a>
<li><strong>Reply:</strong> <a href="16548.php">Peter Thompson: "Re: [OMPI users] TotalView Memory debugging and OpenMPI"</a>
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
