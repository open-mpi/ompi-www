<?
$subject_val = "[OMPI users] cannot call member function 'virtual void MPI::MPI::Datatype::Commit()' without an object";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 25 05:04:08 2012" -->
<!-- isoreceived="20120125100408" -->
<!-- sent="Wed, 25 Jan 2012 19:03:23 +0900" -->
<!-- isosent="20120125100323" -->
<!-- name="Victor Pomponiu" -->
<!-- email="victor.pomponiu_at_[hidden]" -->
<!-- subject="[OMPI users] cannot call member function 'virtual void MPI::MPI::Datatype::Commit()' without an object" -->
<!-- id="CA+4bJf2vZKRpUnvfKpx8acpoZhHWLBACTBbn3pZ7FgkvUMqgKQ_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI users] cannot call member function 'virtual void MPI::MPI::Datatype::Commit()' without an object<br>
<strong>From:</strong> Victor Pomponiu (<em>victor.pomponiu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-25 05:03:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18268.php">Jeff Squyres: "Re: [OMPI users] Are the Messages delivered in order in the MPI?"</a>
<li><strong>Previous message:</strong> <a href="18266.php">Ilias Miroslav: "Re: [OMPI users] pure static &quot;mpirun&quot; launcher"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18271.php">Jeff Squyres: "Re: [OMPI users] cannot call member function 'virtual void MPI::MPI::Datatype::Commit()' without an object"</a>
<li><strong>Reply:</strong> <a href="18271.php">Jeff Squyres: "Re: [OMPI users] cannot call member function 'virtual void MPI::MPI::Datatype::Commit()' without an object"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I cannot call MPI::Datatype::Commit() and MPI::Datatype::Get_size()
<br>
functions from my program. The error that I receive is the some for both of
<br>
them:
<br>
<p>&quot;cannot call member function 'virtual void MPI::Datatype::Commit()' without
<br>
an object
<br>
or
<br>
&quot;cannot call member function 'virtual void MPI::Datatype::Get_size()'
<br>
without an object
<br>
<p>If I'm providing an input parameter to them I will receive this error:
<br>
<p>e.g.,
<br>
<span class="quotelev1">&gt;MPI::Datatype::Commit(MPIVecDataBlock)
</span><br>
<p>'no matching function for call to &#145;MPI::Datatype::Commit(MPI::Datatype&amp;)&#146;
<br>
<p><p>However, MPI::Datatype::Creat_struct(....) can be found.
<br>
<p>Anyone can tell me how to solve this issue?
<br>
<p><p>Thanks
<br>
V
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18267/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18268.php">Jeff Squyres: "Re: [OMPI users] Are the Messages delivered in order in the MPI?"</a>
<li><strong>Previous message:</strong> <a href="18266.php">Ilias Miroslav: "Re: [OMPI users] pure static &quot;mpirun&quot; launcher"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18271.php">Jeff Squyres: "Re: [OMPI users] cannot call member function 'virtual void MPI::MPI::Datatype::Commit()' without an object"</a>
<li><strong>Reply:</strong> <a href="18271.php">Jeff Squyres: "Re: [OMPI users] cannot call member function 'virtual void MPI::MPI::Datatype::Commit()' without an object"</a>
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
