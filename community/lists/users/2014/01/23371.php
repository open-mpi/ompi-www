<?
$subject_val = "Re: [OMPI users] How to use non-primitive types with Java binding";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 16 17:22:29 2014" -->
<!-- isoreceived="20140116222229" -->
<!-- sent="Thu, 16 Jan 2014 23:22:26 +0100" -->
<!-- isosent="20140116222226" -->
<!-- name="Oscar Vega-Gisbert" -->
<!-- email="ovega_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to use non-primitive types with Java binding" -->
<!-- id="20140116232226.344729tz2fct6ehw_at_webmail.dsic.upv.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CA+ssbKV7z44v=dfzk+sP2j4XzBnw4GupZx=__D31j--uuJfGWg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to use non-primitive types with Java binding<br>
<strong>From:</strong> Oscar Vega-Gisbert (<em>ovega_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-16 17:22:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23372.php">tmishima_at_[hidden]: "[OMPI users] hosfile issue of openmpi-1.7.4rc2"</a>
<li><strong>Previous message:</strong> <a href="23370.php">Saliya Ekanayake: "[OMPI users] How to use non-primitive types with Java binding"</a>
<li><strong>In reply to:</strong> <a href="23370.php">Saliya Ekanayake: "[OMPI users] How to use non-primitive types with Java binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23373.php">Saliya Ekanayake: "Re: [OMPI users] How to use non-primitive types with Java binding"</a>
<li><strong>Reply:</strong> <a href="23373.php">Saliya Ekanayake: "Re: [OMPI users] How to use non-primitive types with Java binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>If you are talking about types as ArrayList&lt;Double&gt;, it is not  
<br>
possible, because the Double (D uppercase) is an object which  
<br>
encapsulates a double. And the elements of an ArrayList are references  
<br>
(pointers) to Java objects.
<br>
<p>You can use complex types but you must create them with the Datatype  
<br>
methods (createVector, createStruct,...). And the buffers that hold  
<br>
the data must be arrays of a primitive type or direct buffers.
<br>
<p>Regards,
<br>
Oscar
<br>
<p>Quoting Saliya Ekanayake &lt;esaliya_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it possible to use non-primitive types with MPI operations in OpenMPI's
</span><br>
<span class="quotelev1">&gt; Java binding? At the moment in the trunk I only see Datatypes for primitive
</span><br>
<span class="quotelev1">&gt; kinds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake esaliya_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p>----------------------------------------------------------------
<br>
This message was sent using IMP, the Internet Messaging Program.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23372.php">tmishima_at_[hidden]: "[OMPI users] hosfile issue of openmpi-1.7.4rc2"</a>
<li><strong>Previous message:</strong> <a href="23370.php">Saliya Ekanayake: "[OMPI users] How to use non-primitive types with Java binding"</a>
<li><strong>In reply to:</strong> <a href="23370.php">Saliya Ekanayake: "[OMPI users] How to use non-primitive types with Java binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23373.php">Saliya Ekanayake: "Re: [OMPI users] How to use non-primitive types with Java binding"</a>
<li><strong>Reply:</strong> <a href="23373.php">Saliya Ekanayake: "Re: [OMPI users] How to use non-primitive types with Java binding"</a>
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
