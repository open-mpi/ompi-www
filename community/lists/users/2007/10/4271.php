<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 22 21:06:30 2007" -->
<!-- isoreceived="20071023010630" -->
<!-- sent="Mon, 22 Oct 2007 21:06:23 -0400" -->
<!-- isosent="20071023010623" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Recursive use of &amp;quot;orterun&amp;quot;" -->
<!-- id="200710222106.23210.tprins_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="d1e0809e0710190331k27d2bd3bocb0a13d84163162b_at_mail.gmail.com" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-22 21:06:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4272.php">Lourival Mendes: "Re: [OMPI users] Pascal Interface for OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="4270.php">Tim Prins: "Re: [OMPI users] Syntax error in remote rsh execution"</a>
<li><strong>In reply to:</strong> <a href="4254.php">idesbald van den bosch: "[OMPI users] Recursive use of &quot;orterun&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ides,
<br>
<p>Thanks for the report and reminder. I have filed a ticket on this 
<br>
(<a href="https://svn.open-mpi.org/trac/ompi/ticket/1173">https://svn.open-mpi.org/trac/ompi/ticket/1173</a>) and you should receive email 
<br>
as it is updated.
<br>
<p>I do not know of any more elegant way to work around this at the moment.
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<p>On Friday 19 October 2007 06:31:53 am idesbald van den bosch wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've run into the same problem as discussed in the thread Lev Gelb: &quot;Re:
</span><br>
<span class="quotelev1">&gt; [OMPI users] Recursive use of &quot;orterun&quot; (Ralph H
</span><br>
<span class="quotelev1">&gt; Castain)&quot;&lt;<a href="http://www.open-mpi.org/community/lists/users/2007/07/3655.php">http://www.open-mpi.org/community/lists/users/2007/07/3655.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am running a parallel python code, then from python I launch a C++
</span><br>
<span class="quotelev1">&gt; parallel program using the python os.system command, then I come back in
</span><br>
<span class="quotelev1">&gt; python and keep going.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With LAM/MPI there is no problem with this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But Open-mpi systematically crashes, because the python os.system command
</span><br>
<span class="quotelev1">&gt; launches the C++ program with the same OMPI_* environment variables as for
</span><br>
<span class="quotelev1">&gt; the Python program. As discussed in the thread, I have tried filtering the
</span><br>
<span class="quotelev1">&gt; OMPI_* variables prior to launching the C++ program with an
</span><br>
<span class="quotelev1">&gt; os.execvecommand, but then it fails to return the hand to python and
</span><br>
<span class="quotelev1">&gt; instead simply
</span><br>
<span class="quotelev1">&gt; terminates when the C++ program ends.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a workaround (
</span><br>
<span class="quotelev1">&gt; <a href="http://thread.gmane.org/gmane.comp.clustering.open-mpi.user/986">http://thread.gmane.org/gmane.comp.clustering.open-mpi.user/986</a>): create a
</span><br>
<span class="quotelev1">&gt; *.sh file with the following lines:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------
</span><br>
<span class="quotelev1">&gt; for i in $(env | grep OMPI_MCA |sed 's/=/ /' | awk '{print $1}')
</span><br>
<span class="quotelev1">&gt; do
</span><br>
<span class="quotelev1">&gt;    unset $i
</span><br>
<span class="quotelev1">&gt; done
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # now the C++ call
</span><br>
<span class="quotelev1">&gt; mpirun -np 2  ./MoM/communicateMeshArrays
</span><br>
<span class="quotelev1">&gt; ----------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and then call the *.sh program through the python os.system command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I would like to know is that if this &quot;problem&quot; will get fixed in
</span><br>
<span class="quotelev1">&gt; open-MPI? Is there another way to elegantly solve this issue? Meanwhile, I
</span><br>
<span class="quotelev1">&gt; will stick to the ugly *.sh hack listed above.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ides
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4272.php">Lourival Mendes: "Re: [OMPI users] Pascal Interface for OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="4270.php">Tim Prins: "Re: [OMPI users] Syntax error in remote rsh execution"</a>
<li><strong>In reply to:</strong> <a href="4254.php">idesbald van den bosch: "[OMPI users] Recursive use of &quot;orterun&quot;"</a>
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
