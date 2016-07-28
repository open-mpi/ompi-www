<?
$subject_val = "Re: [OMPI users] How to use non-primitive types with Java binding";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 17 17:20:41 2014" -->
<!-- isoreceived="20140117222041" -->
<!-- sent="Fri, 17 Jan 2014 23:20:38 +0100" -->
<!-- isosent="20140117222038" -->
<!-- name="Oscar Vega-Gisbert" -->
<!-- email="ovega_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to use non-primitive types with Java binding" -->
<!-- id="20140117232038.32302vjpw3fsw8u8_at_webmail.dsic.upv.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CA+ssbKVwGkB+X0pq1vyy+0-7nf42pNvePK0H5AKQ+CUF3brA9w_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-01-17 17:20:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23402.php">Brock Palen: "Re: [OMPI users] openmpi-1.6.5  intel 14.0 MPI-IO Errors"</a>
<li><strong>Previous message:</strong> <a href="23400.php">Ralph Castain: "Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2"</a>
<li><strong>In reply to:</strong> <a href="23373.php">Saliya Ekanayake: "Re: [OMPI users] How to use non-primitive types with Java binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23403.php">Saliya Ekanayake: "Re: [OMPI users] How to use non-primitive types with Java binding"</a>
<li><strong>Reply:</strong> <a href="23403.php">Saliya Ekanayake: "Re: [OMPI users] How to use non-primitive types with Java binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI.OBJECT is no longer supported because of it was based on  
<br>
serialization, and it made the java bindings more complicated. It  
<br>
brought more problems than benefits. For example, it was necessary a  
<br>
shadow communicator...
<br>
<p>You can define complex struct data using direct buffers and avoiding  
<br>
serialization. MPI.OBJECT could be implemented in a higher level  
<br>
layer, but serialization is very bad for performance...
<br>
<p>Regards,
<br>
Oscar
<br>
<p>Quoting Saliya Ekanayake &lt;esaliya_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Thank you Oscar. I was using an earlier nightly tarball and in it there was
</span><br>
<span class="quotelev1">&gt; MPI.OBJECT datatype, which I could use with any serializable complex
</span><br>
<span class="quotelev1">&gt; object. It seems this is no longer supported as per your answer or did I
</span><br>
<span class="quotelev1">&gt; get it wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jan 16, 2014 at 5:22 PM, Oscar Vega-Gisbert &lt;ovega_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you are talking about types as ArrayList&lt;Double&gt;, it is not possible,
</span><br>
<span class="quotelev2">&gt;&gt; because the Double (D uppercase) is an object which encapsulates a double.
</span><br>
<span class="quotelev2">&gt;&gt; And the elements of an ArrayList are references (pointers) to Java objects.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can use complex types but you must create them with the Datatype
</span><br>
<span class="quotelev2">&gt;&gt; methods (createVector, createStruct,...). And the buffers that hold the
</span><br>
<span class="quotelev2">&gt;&gt; data must be arrays of a primitive type or direct buffers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Oscar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Quoting Saliya Ekanayake &lt;esaliya_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is it possible to use non-primitive types with MPI operations in OpenMPI's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Java binding? At the moment in the trunk I only see Datatypes for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; primitive
</span><br>
<span class="quotelev3">&gt;&gt;&gt; kinds.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Saliya
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Saliya Ekanayake esaliya_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; This message was sent using IMP, the Internet Messaging Program.
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake esaliya_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a>
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
<li><strong>Next message:</strong> <a href="23402.php">Brock Palen: "Re: [OMPI users] openmpi-1.6.5  intel 14.0 MPI-IO Errors"</a>
<li><strong>Previous message:</strong> <a href="23400.php">Ralph Castain: "Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2"</a>
<li><strong>In reply to:</strong> <a href="23373.php">Saliya Ekanayake: "Re: [OMPI users] How to use non-primitive types with Java binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23403.php">Saliya Ekanayake: "Re: [OMPI users] How to use non-primitive types with Java binding"</a>
<li><strong>Reply:</strong> <a href="23403.php">Saliya Ekanayake: "Re: [OMPI users] How to use non-primitive types with Java binding"</a>
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
