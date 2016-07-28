<?
$subject_val = "Re: [OMPI devel] Compile-time MPI_Datatype checking";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 31 14:20:21 2012" -->
<!-- isoreceived="20121031182021" -->
<!-- sent="Wed, 31 Oct 2012 20:19:56 +0200" -->
<!-- isosent="20121031181956" -->
<!-- name="Dmitri Gribenko" -->
<!-- email="gribozavr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compile-time MPI_Datatype checking" -->
<!-- id="CA+Y5xYd4rm4-xZhguGp6uPK+xYfrNo+OAyou4e3dBN1RhgUd-A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="61330486-F44F-4D61-9847-0852BB5B7355_at_cisco.com" -->
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
<strong>Date:</strong> 2012-10-31 14:19:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11707.php">Ralph Castain: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11705.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11705.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11707.php">Ralph Castain: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11707.php">Ralph Castain: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Oct 31, 2012 at 5:04 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Oct 31, 2012, at 9:38 AM, Dmitri Gribenko wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The rationale here is that correct MPI applications should not need to add any extra compiler files to compile without warnings.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would disagree with this.  Compiler warnings are most useful when
</span><br>
<span class="quotelev2">&gt;&gt; they are on by default.  Only a few developers will turn on a warning
</span><br>
<span class="quotelev2">&gt;&gt; because warnings are hard to discover and enabling a warning requires
</span><br>
<span class="quotelev2">&gt;&gt; an explicit action from the developer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Understood, but:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a) MPI explicitly allows this kind of deliberate mismatch.  It does not make sense to warn for things that are correct in MPI.
</span><br>
<p>I don't think it is MPI.  It is the C standard that allows one to
<br>
store any pointer in void* and char*.  But C standard also considers
<br>
lots of other weird things to be valid, see below.
<br>
<p><span class="quotelev1">&gt; b) Warnings are significantly less useful if the user looks at them and says, &quot;the compiler is wrong; I know that MPI says that this deliberate mismatch in my code is ok.&quot;
</span><br>
<p>Well, one can also argue that since the following is valid C, the
<br>
warning in question should not be implemented at all:
<br>
<p>long *b = malloc(sizeof(int));
<br>
MPI_Recv(b, 1, MPI_INT, ...);
<br>
<p>But this code is clearly badly written, so we are left with a question
<br>
about where to draw the line.
<br>
<p><span class="quotelev1">&gt; c) as such, these warnings are really only useful for the application where type/MPI_Datatype matching is expected/desired.
</span><br>
<p>Compilers already warn about valid C code.  Silencing many warnings
<br>
relies on conventions that are derived from best practices of being
<br>
explicit about something unusual.  For example:
<br>
<p>$ cat /tmp/aaa.c
<br>
void foo(void *a) {
<br>
&nbsp;&nbsp;for(int i = a; i &lt; 10; i++)
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if(i = 5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;
<br>
&nbsp;&nbsp;}
<br>
}
<br>
$ clang -fsyntax-only -std=c99 /tmp/aaa.c
<br>
/tmp/aaa.c:2:11: warning: incompatible pointer to integer conversion
<br>
initializing 'int' with an expression of type 'void *'
<br>
[-Wint-conversion]
<br>
&nbsp;&nbsp;for(int i = a; i &lt; 10; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^   ~
<br>
/tmp/aaa.c:4:10: warning: using the result of an assignment as a
<br>
condition without parentheses [-Wparentheses]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if(i = 5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;~~^~~
<br>
/tmp/aaa.c:4:10: note: place parentheses around the assignment to
<br>
silence this warning
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if(i = 5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(    )
<br>
/tmp/aaa.c:4:10: note: use '==' to turn this assignment into an
<br>
equality comparison
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if(i = 5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;==
<br>
2 warnings generated.
<br>
<p>According to C standard this is valid C code, but clang emits two
<br>
warnings on this.
<br>
<p><span class="quotelev1">&gt; Can these warnings be enabled as part of the warnings rollup -Wall option?  That would be an easy way to find/enable these warnings.
</span><br>
<p>IIRC, -Wall warning set is frozen in clang.  -Wall is misleading in
<br>
that it does not turn on all warnings implemented in the compiler.
<br>
Clang has -Weverything to really turn on all warnings.  But
<br>
-Weverything is very noisy (by design, not to be fixed) unless one
<br>
also turns off all warnings that are not interesting for the project
<br>
with -Wno-foo.
<br>
<p>I don't think it is possible to disable this warning by default
<br>
because off-by-default warnings are discouraged in Clang.  There is no
<br>
formal policy, but the rule of thumb is: either make the warning good
<br>
enough for everyone or don't implement it; if some particular app does
<br>
something strange, it can disable this warning.
<br>
<p><span class="quotelev2">&gt;&gt; The pattern you described is an important one, but most MPI
</span><br>
<span class="quotelev2">&gt;&gt; applications will have matching buffer types/type tags.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I agree that most applications *probably* don't do this.  But significant developer in this community (i.e., Sandia) has at least multiple applications that *do* do it.  I can't ignore that.  :-(
</span><br>
<p>Here are a few approaches to solving this in order of preference:
<br>
<p>0. Is this really a concern for Sandia?  (I.e., do they target Clang?)
<br>
<p>1. Ask the developer to silence the warning with a cast to 'void *' or
<br>
-Wno-type-safety.  Rationale: compilers already do warn about valid
<br>
but suspicious code.
<br>
<p>2. Turn off checking for char* just like for void*.  Rationale: C
<br>
standard allows char* to alias a pointer of any type.  Note that char*
<br>
is special in this regard (strict aliasing rules).
<br>
<p>3. Turn off annotations by default in mpi.h.
<br>
<p>Dmitri
<br>
<p><pre>
-- 
main(i,j){for(i=2;;i++){for(j=2;j&lt;i;j++){if(!(i%j)){j=0;break;}}if
(j){printf(&quot;%d\n&quot;,i);}}} /*Dmitri Gribenko &lt;gribozavr_at_[hidden]&gt;*/
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11707.php">Ralph Castain: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11705.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11705.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11707.php">Ralph Castain: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11707.php">Ralph Castain: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
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
