<?
$subject_val = "Re: [OMPI devel] Compile-time MPI_Datatype checking";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 30 19:04:52 2012" -->
<!-- isoreceived="20120530230452" -->
<!-- sent="Thu, 31 May 2012 02:04:26 +0300" -->
<!-- isosent="20120530230426" -->
<!-- name="Dmitri Gribenko" -->
<!-- email="gribozavr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compile-time MPI_Datatype checking" -->
<!-- id="CA+Y5xYd0X9g3tK0UU11tT+uB_nFifgpMMsj_bVVch5RvxUh-cw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="0996048C-1CA9-466C-8B8A-1C97FB7F8397_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Compile-time MPI_Datatype checking<br>
<strong>From:</strong> Dmitri Gribenko (<em>gribozavr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-30 19:04:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11064.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11062.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11062.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11064.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11064.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>On Thu, May 31, 2012 at 12:57 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I've reviewed the patch. &#194;&#160;Good stuff!
</span><br>
<p>Thank you very much for the review.  Answers to comments below.
<br>
Updated patch attached.
<br>
<p>*** JMS What do the 3-argument forms of type_tag_for_datatype() do?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;They aren't described in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://lists.cs.uiuc.edu/pipermail/cfe-commits/Week-of-Mon-20120521/057992.html">http://lists.cs.uiuc.edu/pipermail/cfe-commits/Week-of-Mon-20120521/057992.html</a>
<br>
<p>My bad: that page has documentation for the previous version of clang
<br>
patch.  Below is a relevant excerpt of current docs.  Basically, the
<br>
third argument states additional instructions on how to compare types.
<br>
&nbsp;Please excuse me for a long prose copypaste.
<br>
<p>+&lt;h3 id=&quot;type_tag_for_datatype&quot;&gt;&lt;tt&gt;type_tag_for_datatype(...)&lt;/tt&gt;&lt;/h3&gt;
<br>
+
<br>
+&lt;p&gt;Clang supports annotating type tags of two forms.&lt;/p&gt;
<br>
+
<br>
+&lt;ul&gt;
<br>
+&lt;li&gt;&lt;b&gt;Type tag that is an expression containing a reference to some declared
<br>
+identifier.&lt;/b&gt; Use &lt;tt&gt;__attribute__((type_tag_for_datatype(kind, type)))&lt;/tt&gt;
<br>
+on a declaration with that identifier:
<br>
+
<br>
+&lt;blockquote&gt;
<br>
+&lt;pre&gt;
<br>
+extern struct mpi_datatype mpi_datatype_int
<br>
+    __attribute__(( type_tag_for_datatype(mpi,int) ));
<br>
+#define MPI_INT ((MPI_Datatype) &amp;amp;mpi_datatype_int)
<br>
+&lt;/pre&gt;
<br>
+&lt;/blockquote&gt;&lt;/li&gt;
<br>
+
<br>
+&lt;li&gt;&lt;b&gt;Type tag that is an integral literal.&lt;/b&gt;  Introduce a &lt;tt&gt;static
<br>
+const&lt;/tt&gt; variable with a corresponding initializer value and attach
<br>
+&lt;tt&gt;__attribute__((type_tag_for_datatype(kind, type)))&lt;/tt&gt; on that
<br>
+declaration, for example:
<br>
+
<br>
+&lt;blockquote&gt;
<br>
+&lt;pre&gt;
<br>
+#define MPI_INT ((MPI_Datatype) 42)
<br>
+static const MPI_Datatype mpi_datatype_int
<br>
+    __attribute__(( type_tag_for_datatype(mpi,int) )) = 42
<br>
+&lt;/pre&gt;
<br>
+&lt;/blockquote&gt;&lt;/li&gt;
<br>
+&lt;/ul&gt;
<br>
+
<br>
+&lt;p&gt;The attribute also accepts an optional third argument that determines how
<br>
+the expression is compared to the type tag.  There are two supported flags:&lt;/p&gt;
<br>
+
<br>
+&lt;ul&gt;&lt;li&gt;&lt;tt&gt;layout_compatible&lt;/tt&gt; will cause types to be compared according to
<br>
+layout-compatibility rules (C++11 [class.mem] p&amp;nbsp;17, 18).  This is
<br>
+implemented to support annotating types like &lt;tt&gt;MPI_DOUBLE_INT&lt;/tt&gt;.
<br>
+
<br>
+&lt;p&gt;For example:&lt;/p&gt;
<br>
+&lt;blockquote&gt;
<br>
+&lt;pre&gt;
<br>
+/* In mpi.h */
<br>
+struct internal_mpi_double_int { double d; int i; };
<br>
+extern struct mpi_datatype mpi_datatype_double_int
<br>
+    __attribute__(( type_tag_for_datatype(mpi, struct internal_mpi_double_int,
<br>
+                                          layout_compatible) ));
<br>
+
<br>
+#define MPI_DOUBLE_INT ((MPI_Datatype) &amp;amp;mpi_datatype_double_int)
<br>
+
<br>
+/* In user code */
<br>
+struct my_pair { double a; int b; };
<br>
+struct my_pair *buffer;
<br>
+MPI_Send(buffer, 1, MPI_DOUBLE_INT /*, ... */); // no warning
<br>
+
<br>
+struct my_int_pair { int a; int b; }
<br>
+struct my_int_pair *buffer2;
<br>
+MPI_Send(buffer2, 1, MPI_DOUBLE_INT /*, ... */); // warning: actual
<br>
buffer element
<br>
+                                                 // type 'struct my_int_pair'
<br>
+                                                 // doesn't match
<br>
specified MPI_Datatype
<br>
+&lt;/pre&gt;
<br>
+&lt;/blockquote&gt;
<br>
+&lt;/li&gt;
<br>
+
<br>
+&lt;li&gt;&lt;tt&gt;must_be_null&lt;/tt&gt; specifies that the expression should be a null
<br>
+pointer constant, for example:
<br>
+
<br>
+&lt;blockquote&gt;
<br>
+&lt;pre&gt;
<br>
+/* In mpi.h */
<br>
+extern struct mpi_datatype mpi_datatype_null
<br>
+    __attribute__(( type_tag_for_datatype(mpi, void, must_be_null) ));
<br>
+
<br>
+#define MPI_DATATYPE_NULL ((MPI_Datatype) &amp;amp;mpi_datatype_null)
<br>
+
<br>
+/* In user code */
<br>
+MPI_Send(buffer, 1, MPI_DATATYPE_NULL /*, ... */); // warning:
<br>
MPI_DATATYPE_NULL
<br>
+                                                   // was specified but buffer
<br>
+                                                   // is not a null pointer
<br>
+&lt;/pre&gt;
<br>
+&lt;/blockquote&gt;
<br>
+&lt;/li&gt;
<br>
+&lt;/ul&gt;
<br>
<p>*** JMS What happens if the argument type is (void*)?  Does that match
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the tag type?  E.g.:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;char recvbuf;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;void *foo = &amp;recvbuf;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(foo, 1, MPI_CHAR, ...)
<br>
<p>If buffer has type void* then no warning is emitted.
<br>
<p>*** JMS What if I deliberately want to receive into the wrong type
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(and for some reason, I know it's ok)?  Is casting ok enough to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;defeat the tag testing?  E.g.:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;char recvbuf[100];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv((int*) recvbuf, 1, MPI_INT, ...);
<br>
<p>Explicit casts are always honored. In this case buffer type is thought
<br>
to be int*, hence no warning is emitted.
<br>
<p>*** JMS Random suggestion: how about CXX instead of CPP?  CPP could
<br>
&nbsp;&nbsp;&nbsp;&nbsp;also mean C preprocessor.
<br>
<p>Right, CXX is better.  Done.
<br>
<p>*** JMS Why doesn't ompi_mpi_byte have an attribute?  And what does it
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mean to not have an attribute?  Will the type checking be silently
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ignored at compile-time if there's no matching (MPI,foo)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;type_tag_for_datatype?  (same question applies to other instances
<br>
&nbsp;&nbsp;&nbsp;&nbsp;with no tags, like ompi_mpi_packed, but I won't bother repeating
<br>
&nbsp;&nbsp;&nbsp;&nbsp;it everywhere)
<br>
<p>ompi_mpi_byte doesn't have an attr because I annotated only those
<br>
types that have C or C++ equivalents stated in MPI 2.2 specification.
<br>
If OpenMPI provides additional guarantees, for example that Fortran
<br>
types always have some known equivalent C types, we can annotate them,
<br>
too.
<br>
<p>If a function is passed a type tag (that is, MPI_Datatype) that does
<br>
not have an annotation, then that function call is not checked.  That
<br>
is, in MPI_Send(buf, 1, MPI_BYTE, ...) buf can be of any pointer type.
<br>
<p>*** JMS I'm a bit confused as to why 2int got a tag, but the others
<br>
&nbsp;&nbsp;&nbsp;&nbsp;did not.  We do have C equivalents for all types -- do you need a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;listing of the configure results where we figured out all the C
<br>
&nbsp;&nbsp;&nbsp;&nbsp;equivalents?  (i.e., I can look them up for you -- our configury
<br>
&nbsp;&nbsp;&nbsp;&nbsp;is a bit... deep :-) )
<br>
<p>I did not annotate them because those are Fortran types.  If there are
<br>
some known C equivalents in OpenMPI, I will happily add them.  But
<br>
please note that if these equivalents are discovered during configure,
<br>
we can not hardcode them into mpi.h.in.  Some autoconf macros will be
<br>
needed probably.
<br>
<p>*** JMS Shouldn't alltoallw have
<br>
<p>+                                  OMPI_ATTR_POINTER_WITH_TYPE_TAG(1,4)
<br>
+                                  OMPI_ATTR_POINTER_WITH_TYPE_TAG(5,8);
<br>
<p>*** JMS I ask because you have these on PMPI_Alltoallw... but I'm not
<br>
&nbsp;&nbsp;&nbsp;&nbsp;quite sure how that works with arrays of datatypes...
<br>
<p>You are correct, this diagnostic doesn't work with arrays of MPI_Datatypes.
<br>
<p>*** JMS Per my question on MPI_Alltoallw, I'm not quite sure how these
<br>
&nbsp;&nbsp;&nbsp;&nbsp;tags work with arrays of datatypes...?
<br>
<p>I removed the incorrect attribute on PMPI_Alltoallw.
<br>
<p>*** What happens if we're compiling C and std::complex&lt;foo&gt; isn't
<br>
&nbsp;&nbsp;&nbsp;&nbsp;defined?  I see that &lt;complex&gt; is only defined above #if __cplusplus.
<br>
<p>Then OMPI_ATTR_TYPE_TAG_CXX(type) is defined to be empty and these
<br>
type tags are not checked.
<br>
<p>For complex types there is one important thing to have in mind.  IIRC
<br>
(but I may be wrong), GCC and Clang guarantee that C and C++ complex
<br>
types have the same memory layout, so they can be sent using any (C or
<br>
C++) type tag.  But we should better ask on Clang and GCC mailing list
<br>
about this.
<br>
<p>Dmitri
<br>
<p><pre>
-- 
main(i,j){for(i=2;;i++){for(j=2;j&lt;i;j++){if(!(i%j)){j=0;break;}}if
(j){printf(&quot;%d\n&quot;,i);}}} /*Dmitri Gribenko &lt;gribozavr_at_[hidden]&gt;*/

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11063/ompi-v3.patch">ompi-v3.patch</a>
</ul>
<!-- attachment="ompi-v3.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11064.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11062.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11062.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11064.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11064.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
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
