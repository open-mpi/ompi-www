<?
$subject_val = "[OMPI users] remote spawned process hangs at MPI_Init";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 15 13:23:55 2011" -->
<!-- isoreceived="20111015172355" -->
<!-- sent="Sat, 15 Oct 2011 10:23:49 -0700" -->
<!-- isosent="20111015172349" -->
<!-- name="dave fournier" -->
<!-- email="davef_at_[hidden]" -->
<!-- subject="[OMPI users] remote spawned process hangs at MPI_Init" -->
<!-- id="4E99C1A5.3080509_at_otter-rsch.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] remote spawned process hangs at MPI_Init<br>
<strong>From:</strong> dave fournier (<em>davef_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-15 13:23:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17553.php">dave fournier: "[OMPI users] remote spawned process hangs at MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="17551.php">Gustavo Correa: "Re: [OMPI users] Error when using more than 88 processors for a specific executable -Abyss"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to add a host at run time and spawn a slave process.
<br>
The slave process starts but hangs or crashes in MPI_Init().
<br>
Code for the slave process is
<br>
<p>#include &lt;admodel.h&gt;
<br>
int main(int argc,char * argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;ofstream ofs(&quot;junk11&quot;);
<br>
&nbsp;&nbsp;&nbsp;ofs &lt;&lt; &quot;calling MPI_Init&quot; &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;int err=MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;&nbsp;ofs &lt;&lt; &quot;returned MPI_Init err = &quot; &lt;&lt; err &lt;&lt; endl;
<br>
}
<br>
<p>I can run the slave process via ssh as
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ssh smudge ./mpitest
<br>
<p>and the file junk11 then contains
<br>
<p>calling MPI_Init
<br>
returned MPI_Init err = 0
<br>
<p>However if I try to remotely spawn it then junk11 contains
<br>
only the line before the call to MPI_Init
<br>
<p>calling MPI_Init
<br>
<p>and the spawned process appears to have crashed.
<br>
The master process hangs at the spawn command.
<br>
The code to spawn the remote process is
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Info infotest;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int ierr2=MPI_Info_create(&amp;infotest);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Info_set( infotest, &quot;add-hostfile&quot;, &quot;/home/dave/hostfile&quot; );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Info_set( infotest, &quot;host&quot;, &quot;smudge&quot; );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int localerr=MPI_Comm_spawn(&quot;mpitest&quot;, NULL, 1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;infotest, 0, MPI_COMM_SELF, &amp;everyone,
<br>
&amp;(ierr(1)) );
<br>
If I change the line above to
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_INFO_NULL, 0, MPI_COMM_SELF, &amp;everyone,
<br>
<p>Then mpitest is successfully spawned on the local machine.
<br>
Note that I am not using mpirun.
<br>
<p>ompi_info output is identical for both machines
<br>
<p>ompi_info -v ompi full --parsable
<br>
package:Open MPI dave_at_scum Distribution
<br>
ompi:version:full:1.5.4
<br>
ompi:version:svn:r25060
<br>
ompi:version:release_date:Aug 18, 2011
<br>
orte:version:full:1.5.4
<br>
orte:version:svn:r25060
<br>
orte:version:release_date:Aug 18, 2011
<br>
opal:version:full:1.5.4
<br>
opal:version:svn:r25060
<br>
opal:version:release_date:Aug 18, 2011
<br>
ident:1.5.4
<br>
<p><p><p>How can I find out what is happening to the remote spawned  process?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17553.php">dave fournier: "[OMPI users] remote spawned process hangs at MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="17551.php">Gustavo Correa: "Re: [OMPI users] Error when using more than 88 processors for a specific executable -Abyss"</a>
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
