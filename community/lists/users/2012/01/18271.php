<?
$subject_val = "Re: [OMPI users] cannot call member function 'virtual void MPI::MPI::Datatype::Commit()' without an object";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 25 11:41:16 2012" -->
<!-- isoreceived="20120125164116" -->
<!-- sent="Wed, 25 Jan 2012 11:40:53 -0500" -->
<!-- isosent="20120125164053" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cannot call member function 'virtual void MPI::MPI::Datatype::Commit()' without an object" -->
<!-- id="A62A52E7-9BEE-47F2-918F-30CEA1025036_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CA+4bJf2vZKRpUnvfKpx8acpoZhHWLBACTBbn3pZ7FgkvUMqgKQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] cannot call member function 'virtual void MPI::MPI::Datatype::Commit()' without an object<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-25 11:40:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18272.php">Rodrigo Oliveira: "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem"</a>
<li><strong>Previous message:</strong> <a href="18270.php">Shiqing Fan: "Re: [OMPI users] Openmpi in Mingw"</a>
<li><strong>In reply to:</strong> <a href="18267.php">Victor Pomponiu: "[OMPI users] cannot call member function 'virtual void MPI::MPI::Datatype::Commit()' without an object"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 25, 2012, at 5:03 AM, Victor Pomponiu wrote:
<br>
<p><span class="quotelev1">&gt; I cannot call MPI::Datatype::Commit() and MPI::Datatype::Get_size() functions from my program. The error that I receive is the some for both of them:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;cannot call member function 'virtual void MPI::Datatype::Commit()' without an object
</span><br>
<span class="quotelev1">&gt; or 
</span><br>
<span class="quotelev1">&gt; &quot;cannot call member function 'virtual void MPI::Datatype::Get_size()' without an object
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I'm providing an input parameter to them I will receive this error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; e.g.,
</span><br>
<span class="quotelev2">&gt; &gt;MPI::Datatype::Commit(MPIVecDataBlock)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 'no matching function for call to &#145;MPI::Datatype::Commit(MPI::Datatype&amp;)&#146;
</span><br>
<p>IIRC, these are member functions.  So you'd call my_datatype.Commit() and my_datatype.Get_size().
<br>
<p><span class="quotelev1">&gt; However, MPI::Datatype::Creat_struct(....) can be found. 
</span><br>
<p>This is a static function that is just in the MPI namespace -- it is not a member function on an object instance.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18272.php">Rodrigo Oliveira: "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem"</a>
<li><strong>Previous message:</strong> <a href="18270.php">Shiqing Fan: "Re: [OMPI users] Openmpi in Mingw"</a>
<li><strong>In reply to:</strong> <a href="18267.php">Victor Pomponiu: "[OMPI users] cannot call member function 'virtual void MPI::MPI::Datatype::Commit()' without an object"</a>
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
